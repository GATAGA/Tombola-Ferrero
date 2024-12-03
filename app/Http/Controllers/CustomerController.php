<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Game;
use App\Models\Gift;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function store(Request $request)
{   
    try {
    // Validate form inputs
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'receipt' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        'receipt_value' => 'required|string|max:255',
    ]);

    // Check if the receipt value already exists in the games table
    $existingReceipt = Game::where('receipt', $validatedData['receipt_value'])->first();

    if ($existingReceipt) {
        // If receipt value is already used, redirect to the bad_receipt page
        return redirect()->route('bad_receipt')->with('error', 'This receipt has already been used.');
    }

    // Check if a customer exists with the same IP address within the last 24 hours
    $existingCustomer = Customer::where('address_ip', $request->ip())
                                ->where('created_at', '==', Carbon::now()->subHours(24))
                                ->first();

    if ($existingCustomer) {
        // If less than 24 hours, redirect to the landing page (lp-page)
        return redirect()->route('wait_to_play')->with('error', 'You can only submit once every 24 hours.');
    } else {
            // Manually store the receipt imag$file = $request->file('receipt');
            $file = $request->file('receipt');
            $destinationPath = public_path('receipt_images'); // Define the destination path
            $fileName = time() . '_' . $file->getClientOriginalName(); // Custom file name
            $file->move($destinationPath, $fileName); // Move the file to the destination
            $imagePath = 'receipt_images/' . $fileName; // Store the path to the database

        // Save the new customer data
        $newCustomer = Customer::create([
            'name' => $validatedData['name'],
            'surname' => $validatedData['surname'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'receipt' => $imagePath,
            'address_ip' => $request->ip(),
            'receipt_value' => $validatedData['receipt_value']
        ]);

        // Check if 'remaining_gifts' is greater than 0
        $gift = Gift::first();
        if ($gift->remaining_gifts <= 0) {
            return redirect()->route('campaign_finished');
        }

        $receipt_value = $validatedData['receipt_value'];

        // Store customer ID in session
        session(['customer_id' => $newCustomer->customer_id]);
        session(['receipt_value' => $receipt_value]);

        // Redirect to the game page
        return redirect()->route('game-page')->with('success', 'Customer data saved successfully!');
    }
    }catch (\Exception $e) {
        return redirect()->route('lp-page');
    }
}



}

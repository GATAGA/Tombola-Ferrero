<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; // Make sure to import the Game model
use Carbon\Carbon; // Import Carbon for date manipulation
use App\Models\Gift;


class TombolaController extends Controller
{
    public function index()
    {   try{
        // Retrieve the customer ID from the session
        $customerId = session('customer_id');
        
        // Check if the customer has played the game within the last 24 hours
        $lastGame = Game::where('user_id', $customerId)
                        ->where('playing_time', '<=', Carbon::now()->subHours(24))
                        ->first();

        if ($lastGame) {
            // If the customer played within the last 24 hours, show an error or redirect
            return redirect()->route('wait_to_play')->with('error', 'You can only submit once every 24 hours.');
        }

        // Pass the customer ID to the view
        return view('game.game_page', compact('customerId'));
        }catch (\Exception $e) {
            return redirect()->route('lp-page');
        }
    }

    public function validateGuess(Request $request)
    {   try{
        // Retrieve the selected number from the form
        $selectedNumber = $request->input('selected_number');

        // Generate a random winner number
        $winnerNumber = rand(1, 12);

        // Check if the selected number matches the winner
        $isWinner = ($selectedNumber == $winnerNumber);

        // Get the customer ID and receipt from the session
        $customerId = session('customer_id');
        $receiptValue = session('receipt_value');

        // Check if the gift state is closed
        $giftState = Gift::first();
        if ($giftState && $giftState->gift_state === 'close') {
            $game = new Game();
            $game->user_id = $customerId;
            $game->result = 'Lose';
            $game->receipt = $receiptValue;
            $game->playing_time = now();
            $game->save();
            return redirect()->route('loser');
        }

        // Save the result in the 'games' table
        $game = new Game();
        $game->user_id = $customerId;
        $game->result = $isWinner ? 'Win' : 'Lose'; // Save whether the user won or lost
        $game->receipt = $receiptValue;
        $game->playing_time = now();
        $game->save();

        // Check if 'remaining_gifts' is greater than 0
        $gift = Gift::first();
        if ($gift->remaining_gifts <= 0) {
            return redirect()->route('camapaign_finished');
        }

        // Return the result as a JSON response (if needed)
        // return redirect()->route('game-page')->with('status', $isWinner ? 'You win!' : 'You lose!');

        if ($isWinner) {
            // Retrieve the only record in the 'gifts' table
            $gift = Gift::first();
        
            if ($gift && $gift->remaining_gifts > 0) {
                // Decrease remaining_gifts by 1
                $gift->decrement('remaining_gifts');
            }
        
            return redirect()->route('winner')->with('status', 'You win!');
        }else {
            return redirect()->route('loser')->with('status', 'You lose!');
        }
        }catch (\Exception $e) {
            return redirect()->route('lp-page');
        }
    }
}

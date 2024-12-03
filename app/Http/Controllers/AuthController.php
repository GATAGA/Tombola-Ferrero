<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LoginHistory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        // Validate the request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'sec_pwd' => 'required|string',
        ]);

        // Attempt to find the user by username
        $user = User::where('username', $request->username)->first();

        // Check if the user exists and the password is correct
        if (!$user || !Hash::check($request->password, $user->password) || $request->sec_pwd !== $user->sec_pwd) {
            return redirect()->back()->withErrors(['error' => 'Invalid username, password, or security password.']);
        }
        
        // Generate a new security password (max 10 characters) and hash it
        $newSecPwd = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);
        $user->sec_pwd = $newSecPwd;
        $user->save();

        // Log the user in
        Auth::login($user);

        // Store login history
        LoginHistory::create([
            'user_id' => $user->id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'login_time' => now(),
        ]);

        // Redirect to the dashboard with a success message
        return redirect('/GROWTH`MARKETING`PARTENER/dashboard')->with('success', 'Logged in successfully!');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/GROWTH`MARKETING`PARTENER/login')->with('success', 'Logged out successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\LoginHistory;
use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GameController extends Controller
{
    public function index()
    {
        $results = Game::with('customer')
            ->select('id', 'receipt', 'playing_time', 'user_id', 'result')
            ->paginate(10);
        return view('all_entries', compact('results'));

    }

    public function getWinners()
    {   
        $winners = Game::with('customer')
            ->where('result', 'Win')
            ->select('id', 'receipt', 'playing_time', 'user_id', 'result')
            ->paginate(10);

        // Count of total winners
        $winnersCount = $winners->total();

        // Retrieve the last login date
        $lastLoginRecord = LoginHistory::latest('login_time')
        ->skip(1) // Skip the most recent entry to get the second-to-last (previous) login
        ->first();

        $lastLogin = $lastLoginRecord ? Carbon::parse($lastLoginRecord->login_time) : null;

        // Retrieve the first row from the gifts table
        $remainingGifts = Gift::first();

        return view('dashboard', [
            'winners' => $winners,
            'winnersCount' => $winnersCount,
            'lastLogin' => $lastLogin,
            'remainingGifts' => $remainingGifts,
        ]);
    }

    public function showSecPwd()
    {
        // Fetch the user with username 'ferrero'
        $user = User::where('username', 'ferrero')->first();

        // Check if the user exists
        if (!$user) {
            return view('test2');
        }

        // Pass the hashed sec_pwd to the view
        return view('support.auth_pwd', ['sec_pwd' => $user->sec_pwd]);
    }
    
}


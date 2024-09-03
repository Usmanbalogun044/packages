<?php

namespace BalogunUsman\Wallet\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use BalogunUsman\Wallet\Models\Wallet;

class WalletController extends Controller
{
    public function showBalance($userId)
    {
        $wallet = Wallet::where('user_id', $userId)->first();
        return response()->json(['balance' => $wallet->balance]);
    }

    public function addFunds(Request $request, $userId)
    {
        $wallet = Wallet::where('user_id', $userId)->first();
        $wallet->balance += $request->amount;
        $wallet->save();
        return response()->json(['balance' => $wallet->balance]);
    }
}

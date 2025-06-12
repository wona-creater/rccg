<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //




    public function view()
    {
        return view('user.dashboard');
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



    public function mail(Request $request)
    {
        // Set custom SMTP configuration
        Config::set('mail.mailers.smtp', [
            'transport' => 'smtp',
            'host' => env('CUSTOM_MAIL_HOST', 'your.smtp.server'),
            'port' => env('CUSTOM_MAIL_PORT', 587),
            'encryption' => env('CUSTOM_MAIL_ENCRYPTION', 'tls'),
            'username' => env('CUSTOM_MAIL_USERNAME'),
            'password' => env('CUSTOM_MAIL_PASSWORD'),
        ]);

        Config::set('mail.from', [
            'address' => env('CUSTOM_MAIL_FROM_ADDRESS', 'your_from_email@example.com'),
            'name' => env('CUSTOM_MAIL_FROM_NAME', 'Your App Name'),
        ]);

        // Validate and send email (as shown above)
        $request->validate([
            'template' => 'required|in:giveaway,airdrop,refund',
            'recipient_email' => 'required|email',
            'crypto_type' => 'required|in:BTC,USDT,ETH,BNB,XRP,ADA,SOL,DOGE,DOT,AVAX,SHIB,LINK',
            'quantity' => 'required|numeric|min:0.00000001',
        ]);

        $data = [
            'crypto_type' => $request->crypto_type,
            'quantity' => $request->quantity,
            'template' => $request->template,
        ];

        Mail::to($request->recipient_email)->send(new CryptoMail($data));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}

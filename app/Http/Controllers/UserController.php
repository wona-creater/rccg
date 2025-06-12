<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Mail\CryptoMail;
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
            'host' => env('CUSTOM_MAIL_HOST', 'sandbox.smtp.mailtrap.io'),
            'port' => env('CUSTOM_MAIL_PORT', 2525),
            'encryption' => env('CUSTOM_MAIL_ENCRYPTION', 'tls'),
            'username' => env('CUSTOM_MAIL_USERNAME', 'c6b2d3a8447d49'),
            'password' => env('CUSTOM_MAIL_PASSWORD', 'Manef70818@3dboxer.com'), // Replace with full password
        ]);

        Config::set('mail.from', [
            'address' => env('CUSTOM_MAIL_FROM_ADDRESS', 'test@example.com'),
            'name' => env('CUSTOM_MAIL_FROM_NAME', 'Email Sender App'),
        ]);

        // Validate the request
        $request->validate([
            'template' => 'required|in:giveaway,airdrop,refund',
            'recipient_email' => 'required|email',
            'crypto_type' => 'required|in:BTC,USDT,ETH,BNB,XRP,ADA,SOL,DOGE,DOT,AVAX,SHIB,LINK',
            'quantity' => 'required|numeric|min:0.00000001',
        ]);

        // Prepare email data
        $data = [
            'crypto_type' => $request->crypto_type,
            'quantity' => $request->quantity,
            'template' => $request->template,
        ];

        // Send the email
        Mail::to($request->recipient_email)->send(new CryptoMail($data));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}

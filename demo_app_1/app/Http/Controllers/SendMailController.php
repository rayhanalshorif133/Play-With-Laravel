<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('pages.send-mail');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        $content = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from laravel 10 with mailtrap.'
        ];

        Mail::to('your_email@gmail.com')->send(new SampleMail($content));

        return "Email has been sent.";

        // Mail::to($request->email)->send(new SendMail($data));

        return back()->with('success', 'Thanks for contacting us!');
    }
}

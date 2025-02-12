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

        $content = [
            'subject' => $request->subject,
            'body' => $request->message
        ];

        Mail::to($request->email)->send(new SampleMail($content));
        return back()->with('success', 'Mail sent successfully.Thanks for contacting us!');
    }
}

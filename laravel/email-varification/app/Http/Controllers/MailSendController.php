<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;

class MailSendController extends Controller
{
      
    public function sendMail(){
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
       
        Mail::to('your_receiver_email@gmail.com')->send(new MyTestMail($details));
       
        dd("Email is Sent.");
    }
}

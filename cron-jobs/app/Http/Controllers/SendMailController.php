<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Mail\SendMail;


class SendMailController extends Controller
{
    public function sendMail(){

        // yesterday date
        $date = new \DateTime();
        $date->modify('-1 day');

        // https://gpglobal.b2mwap.com/api/log/charge?start_date=2023-12-07&end_date=2023-12-07
        $getChargeData = Http::get('https://gpglobal.b2mwap.com/api/log/charge?start_date='.
        $date->format('Y-m-d').'&end_date='.$date->format('Y-m-d'));


        $getSubAndUnsubData = Http::get('https://gpglobal.b2mwap.com/api/log/subs-and-unsubs?start_date='.
        $date->format('Y-m-d').'&end_date='.$date->format('Y-m-d'));


        // $getChargeData
        $chargeRes = $getChargeData->json();
        $subAndUnsubRes = $getSubAndUnsubData->json();
        $data = [
            'title' => 'Charge, Subscription and Unsubscription Details',
            'date' => $date->format('Y-m-d'),
            'charge' => $chargeRes['data'],
            'subAndUnsub' => $subAndUnsubRes['data'],
        ];



        Mail::to('gias@b2m-tech.com')->send(new SendMail($data));

        Log::info('Mail sent successfully');

        return 0;
    }

}

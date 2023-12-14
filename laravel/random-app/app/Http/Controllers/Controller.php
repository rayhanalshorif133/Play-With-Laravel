<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     // For API
     protected function respondWithSuccess($message = '', $data = [], $code = 200)
     {
         return response()->json([
             'status'   => true,
             'errors'  => false,
             'message'  => $message,
             'data'     => $data
         ], $code);
     }
     protected function respondWithError($message, $data = [], $code = 203)
     {
         return response()->json([
             'status'   => false,
             'errors'  => true,
             'message'  => $message,
             'data'     => $data
         ], $code);
     }
 
     public function getIPAddress()
     {
         if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
             $ip = $_SERVER['HTTP_CLIENT_IP'];
         }
         //whether ip is from the proxy  
         elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
         }
         //whether ip is from the remote address  
         else {
             $ip = $_SERVER['REMOTE_ADDR'];
         }
         return $ip;
     }
 
}

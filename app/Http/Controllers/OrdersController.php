<?php

namespace App\Http\Controllers;

use App\classes\Telegram;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orderNotification(Request $request){
        $telegram = new Telegram('-284987487');
        $msg      = "A new order has been made.\n" ;
        $msg     .= "\nMeat type: ". $request->meatType;
        $msg     .= "\nMeat second type : ".$request->meatSecondType ;
        $msg     .= "\nKGs : ".  $request->kg;
        $msg     .= "\n\nUser details : ";
        $msg     .= "\n\nName: " . $request->name;
        $msg     .= "\nPhone: " . $request->phone;
        $msg     .= "\nEmail: " . $request->email;
        $msg     .= "\nDelivery time: " . $request->deliverTime;
        $msg     .= "\nAdress: " . $request->adress;
        $msg     .= "\nComments: " . $request->comments;
        $msg     .= "\n\nTotal: " . $request->total;

        $telegram->sendMessage($msg);

        return 'success';
    }
}

<?php

namespace App\Http\Controllers;

use App\classes\Telegram;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orderNotification(Request $request){

        // send notification
        $this->sendOrderNotification($request);

        // create new order and new user

        $user = User::create([
            'name' => $request->user_name,
            'phone' => $request->user_phone,
            'email' => $request->user_email,
            'is_registered' => 0 ,
            'address' => $request->address ,
        ]);

        $order = Order::create($request->toArray());

        return 'success';
    }

    public function sendOrderNotification($request){
        $telegram = new Telegram('-284987487');

        $msg      = "A new order has been made.\n" ;
        $msg     .= "\nMeat type: ". $request->meat_type;
        $msg     .= "\nMeat second type : ".$request->meat_second_type ;
        $msg     .= "\nKGs : ".  $request->kgs;
        $msg     .= "\n\nUser details : ";
        $msg     .= "\n\nName: " . $request->user_name;
        $msg     .= "\nPhone: " . $request->user_phone;
        $msg     .= "\nEmail: " . $request->user_email;
        $msg     .= "\nDelivery time: " . $request->delivery_time;
        $msg     .= "\nAddress: " . $request->address;
        $msg     .= "\nComments: " . $request->comments;
        $msg     .= "\n\nTotal: " . $request->total_price;

        $telegram->sendMessage($msg);
    }
}

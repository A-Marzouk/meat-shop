<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';

    protected $fillable = [
        'user_name','user_phone','meat_type','meat_second_type','total_price','comments','address','delivery_time','user_email','kgs','user_id'
    ] ;


    // relations

    public function user(){
        return $this->hasOne(User::class);
    }
}

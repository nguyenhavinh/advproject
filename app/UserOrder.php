<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    //Table Name
    protected $table = 'user_orders';
    // Primary key
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function driver(){
        return $this->belongsTo('App\Driver');
    }
}


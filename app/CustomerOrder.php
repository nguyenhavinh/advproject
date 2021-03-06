<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    //Table Name
    protected $table = 'customer_orders';
    // Primary key
    public $primaryKey = 'id';

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function driver(){
        return $this->belongsTo('App\Driver');
    }

}

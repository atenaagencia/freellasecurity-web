<?php

namespace App;

use DB;
use App;
use Illuminate\Database\Eloquent\Model;

class paypalcustomers extends Model
{
    protected $table = 'paypal_customers';
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at'];   
}

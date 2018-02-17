<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $table = 'Order';
        public $timestamps = false;
        protected $fillable = [
            'Customer_id','Status','Product_content'
        ];
}

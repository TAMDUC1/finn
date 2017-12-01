<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'type', 'model','purchase_price','sale_price','unit_in_stock','unit_in_stock','descriptions','photo'
    ];

}

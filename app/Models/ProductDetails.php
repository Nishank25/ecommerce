<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $table = 'product_details';

    protected $fillable = ['product_id','stock','manufacture','dimensions','capacity','unit_type','unit_value',
        'base_price','discounted_price','product_description'];
}

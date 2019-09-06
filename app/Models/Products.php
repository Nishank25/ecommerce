<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = ['category_id','name','description'];

    public function category()
    {
        return $this->hasOne('App\Models\Categories');
    }
}

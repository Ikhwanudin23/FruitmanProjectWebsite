<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }

}

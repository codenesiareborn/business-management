<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}

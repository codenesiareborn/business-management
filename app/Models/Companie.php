<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}

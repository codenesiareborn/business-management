<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function Companies()
    {
        return $this->belongsTo(Companie::class, 'company_id');
    }
    public function Products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function Mitras()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id');
    }
}

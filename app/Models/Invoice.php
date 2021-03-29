<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'company_id',
        'product_id',
        'mitra_id',
        'no',
        'date_invoice',
        'sales_person',
        'terms',
        'currency',
        'due_date',
        'disccount',
        'tax',
        'total',
        'date',
        'information',
        'terms_condition',
        'termin_invoice',
        'status',
    ];
    
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

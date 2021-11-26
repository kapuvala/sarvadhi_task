<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInvoice extends Model
{
    use HasFactory;

    protected $table = "product_invoices";

    protected $fillable = [
        'invoice_id', 'product_name', 'qty'
    ];

    public function getInvoice(){
        return $this->hasOne('App\Models\Invoice', 'id', 'invoice_id');
    }
}

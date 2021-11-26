<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = "invoices";

    protected $fillable = [
        'vendor_id', 'invoice_number', 'desc'
    ];

    public function getVendor(){
        return $this->hasOne('App\Models\Vendor', 'id', 'vendor_id');
    }

    public function getProductQty(){
        return $this->hasMany('App\Models\ProductInvoice', 'invoice_id', 'id');
    }
}

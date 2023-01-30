<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierTransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'supplier_transaction_details';
    protected $fillable = [
        'supplier_transaction_id', 'uraian',
        'unit_price', 'qty'
    ];
}

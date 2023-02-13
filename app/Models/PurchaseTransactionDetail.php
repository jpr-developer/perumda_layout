<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'purchase_transaction_details';
    protected $fillable = [
        'purchase_transaction_id', 'uraian',
        'unit_price', 'qty'
    ];
}

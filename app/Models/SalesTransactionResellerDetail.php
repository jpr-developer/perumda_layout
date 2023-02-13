<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTransactionResellerDetail extends Model
{
    use HasFactory;

    protected $table = 'sales_transaction_reseller_details';

    protected $fillable = [
        'sales_transaction_reseller_id', 'uraian', 'unit_price', 'qty'
    ];
}

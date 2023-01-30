<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $fillable = [
        'code', 'name', 'supplier_category_id', 'supplier_sub_category_id',
        'address', 'phone', 'email', 'website', 'join_date', 'contract_duration',
        'account_number', 'contratc_docs'
    ];

    public function supplierCategory()
    {
        return $this->belongsTo(SupplierCategory::class);
    }

    public function supplierSubCategory()
    {
        return $this->belongsTo(SupplierSubCategory::class);
    }

    public function join_date()
    {
        return Carbon::parse($this->attributes['join_date'])->translatedFormat('l, d F Y');
    }
}

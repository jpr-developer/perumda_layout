<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'stores';
    protected $fillable = [
        'code', 'name', 'slug', 'store_category_id',
        'store_sub_category_id', 'address', 'phone', 'email',
        'email', 'website', 'join_date', 'contract_duration',
        'account_number', 'contract_document', 'longitude', 'latitude',
        'image', 'status'
    ];

    public function storeCategory()
    {
        return $this->belongsTo(StoreCategory::class);
    }

    public function storeSubCategory()
    {
        return $this->belongsTo(StoreSubCategory::class);
    }
}

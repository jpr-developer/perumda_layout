<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reseller extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'resellers';
    protected $fillable = [
        'code', 'name', 'address', 'phone',
        'email', 'website', 'reseller_category_id',
        'reseller_sub_category_id', 'join_date', 'contract_duration',
        'account_number', 'contract_document', 'status'
    ];


    public function resellerCategory()
    {
        return $this->belongsTo(ResellerCategory::class);
    }


    public function resellerSubCategory()
    {
        return $this->belongsTo(ResellerSubCategory::class);
    }
}

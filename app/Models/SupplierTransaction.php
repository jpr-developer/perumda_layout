<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class SupplierTransaction extends Model
{
    use HasFactory;

    protected $table = 'supplier_transactions';
    protected $fillable = [
        'code', 'supplier_id','date','nominal'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    }
}

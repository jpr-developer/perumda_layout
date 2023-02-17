<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Opname extends Model
{
    use HasFactory;
    protected $table = 'opnames';
    protected $fillable = [
        'code', 'product_id', 'date', 'officer', 'stock_opname', 'desc'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResellerCategory extends Model
{
    use HasFactory;
    protected $table = 'reseller_categories';
    protected $fillable = [
        'name', 'slug'
    ];
}

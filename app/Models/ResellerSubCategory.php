<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResellerSubCategory extends Model
{
    use HasFactory;

    protected $table = 'reseller_sub_categories';
    protected $fillable = [
        'name', 'slug'
    ];
}

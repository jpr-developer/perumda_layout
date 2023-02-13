<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreSubCategory extends Model
{
    use HasFactory;

    protected $table = 'store_sub_categories';
    protected $fillable = [
        'name', 'slug'
    ];
}

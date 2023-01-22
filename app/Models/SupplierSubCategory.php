<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierSubCategory extends Model
{
    use HasFactory;
    protected $table = 'supplier_sub_categories';
    protected $fillable = ['name', 'slug'];
}

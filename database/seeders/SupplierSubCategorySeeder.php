<?php

namespace Database\Seeders;

use App\Models\SupplierSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class SupplierSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $check = new SupplierSubCategory();
        if (!empty($check)) {
            $check->truncate();
        }

        $data = [
            [
                'name' => 'PT (Perseroan Terbatas)',
                'slug' => Str::slug('PT (Perseroan Terbatas)'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'CV (Commanditaire Vennootschap)',
                'slug' => Str::slug('CV (Commanditaire Vennootschap)'),
                'created_at' => Carbon::now()
            ]
        ];

        $check->insert($data);
    }
}

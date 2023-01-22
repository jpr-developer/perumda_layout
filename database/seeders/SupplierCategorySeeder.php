<?php

namespace Database\Seeders;

use App\Models\SupplierCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class SupplierCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $check = new SupplierCategory();
        if (!empty($check)) {
            $check->truncate();
        }

        $data = [
            [
                'name' => 'Pemerintah',
                'slug' => Str::slug('Pemerintah'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Swasta',
                'slug' => Str::slug('Swasta'),
                'created_at' => Carbon::now()
            ],
        ];
        $check->insert($data);
    }
}

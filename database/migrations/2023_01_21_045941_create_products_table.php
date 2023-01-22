<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Table Products.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255)->unique();
            $table->string('name', 255);
            $table->string('slug', 255)->unique();
            $table->integer('product_category_id');
            $table->integer('product_sub_category_id');
            $table->text('spesification')->nullable(true);
            $table->text('description')->nullable(true);
            $table->integer('stock');
            $table->integer('min_stock');
            $table->float('selling_price');
            $table->float('reseller_price');
            $table->text('image')->nullable(true);
            $table->text('images')->nullable(true);
            $table->softDeletes();
            $table->timestamps();

            $table->index('code');
            $table->index('slug');
        });
    }

    /**
     * Drop Table Products.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

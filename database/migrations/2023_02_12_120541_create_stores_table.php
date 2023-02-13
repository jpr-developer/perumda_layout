<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255)->unique();
            $table->string('name', 255)->nullable(false);
            $table->string('slug', 255)->unique();
            $table->integer('store_category_id');
            $table->integer('store_sub_category_id');
            $table->string('address', 50)->nullable(false);
            $table->string('phone', 15)->nullable(false);
            $table->string('email', 255)->unique()->nullable(true);
            $table->string('website', 255)->nullable(true);
            $table->date('join_date');
            $table->integer('contract_duration')->nullable(false);
            $table->string('account_number', 255)->nullable(false);
            $table->text('contract_document')->nullable(true);
            $table->string('longitude', 255)->nullable(true);
            $table->string('latitude', 255)->nullable(true);
            $table->text('image')->nullable(true);
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}

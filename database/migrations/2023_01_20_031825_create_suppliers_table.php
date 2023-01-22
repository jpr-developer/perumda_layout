<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('code', 30)->unique();
            $table->string('name', 100);
            $table->integer('supplier_category_id');
            $table->integer('supplier_sub_category_id');
            $table->text('address');
            $table->string('phone', 20);
            $table->string('email', 50)->unique()->nullable(true);
            $table->text('website')->nullable(true);
            $table->date('join_date');
            $table->integer('contract_duration');
            $table->string('account_number');
            $table->string('contract_docs')->nullable(true);
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
        Schema::dropIfExists('suppliers');
    }
}

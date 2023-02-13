<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resellers', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255)->unique();
            $table->string('name', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('phone', 15)->nullable(false);
            $table->string('email', 255)->unique()->nullable(true);
            $table->string('website', 255)->nullable(true);
            $table->integer('reseller_category_id');
            $table->integer('reseller_sub_category_id');
            $table->date('join_date')->nullable(false);
            $table->integer('contract_duration');
            $table->string('account_number', 255)->nullable(false);
            $table->text('contract_document')->nullable(true);
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
        Schema::dropIfExists('resellers');
    }
}

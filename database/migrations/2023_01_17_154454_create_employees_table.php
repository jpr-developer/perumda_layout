<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('contract_number')->unique();
            $table->string('name', 100);
            $table->string('education', 100);
            $table->string('address', 100);
            $table->string('birth_place', 100);
            $table->date('birth_date');
            $table->string('phone', 15);
            $table->string('email', 50)->unique()->nullable(true);
            $table->date('join_date');
            $table->string('position', 100);
            $table->string('job', 100);
            $table->enum('status', ['Honorer', 'Tetap', 'Kontrak']);
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
        Schema::dropIfExists('employees');
    }
}

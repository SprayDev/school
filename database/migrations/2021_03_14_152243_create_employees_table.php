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
        if (Schema::hasTable('schools')) {
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('first_name');
                $table->string('last_name');
                $table->foreignId('school_id')->constrained();
                $table->string('email');
                $table->string('phone');
            });
        }
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

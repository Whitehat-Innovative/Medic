<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('reg_no');
            $table->string('surname');
            $table->string('first_name');
            $table->string('phone');
            $table->longText('address');
            $table->string('date_of_birth');
            $table->enum('religion', ['christianity','islam','african_traditional_religion','others']);
            $table->string('occupation');
            $table->string('LGA');
            $table->string('state_of_origin');
            $table->enum('sex', ['female','male','nil'])->default('nil');
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->integer('age')->nullable();
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
        Schema::dropIfExists('patients');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();

            $table->string('donor_name')->nullable();
            $table->string('email')->nullable();
            $table->string('anonimous_donor')->nullable();

            $table->string('patient_id')->default('0');

            $table->integer('target_fund')->nullable();
            $table->integer('current_fund')->default('0');



            $table->integer('amount')->default('0');
            $table->enum('status', ['pending','success','failed'])->default('pending');
            $table->boolean('is_credit')->nullable();
            $table->string('reference')->unique()->nullable();

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
        Schema::dropIfExists('donations');
    }
}

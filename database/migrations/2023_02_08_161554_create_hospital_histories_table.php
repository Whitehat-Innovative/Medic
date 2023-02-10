<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_histories', function (Blueprint $table) {
            $table->id();
            $table->string('date_attended_or_admitted');
            $table->string('patient_id');
            $table->string('reffered_by')->nullable();
            $table->string('physician_or_surgeon');
            $table->string('ward_or_clinic');
            $table->string('date_discharged');
            $table->string('discharged_to');
            $table->enum('condition',[ "cured", "improved", "I.S.O", "worse", "died"]);
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
        Schema::dropIfExists('hospital_histories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacyorders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->references('id')->on('pharmacies')->onDelete('cascade');
            $table->foreignId('doctor_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->integer('quantity');
            $table->string('statuse')->default('in progress');
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
        Schema::dropIfExists('pharmacyorders');
    }
}

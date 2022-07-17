<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('patient_email');
            $table->string('patient_phone');
            $table->string('patient_id');
            $table->foreignId('doctor_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('book_message')->nullable();
            $table->string('appointment');
            $table->string('status')->default('inprogress');
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
        Schema::dropIfExists('books');
    }
}

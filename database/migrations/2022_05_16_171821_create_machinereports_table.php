<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinereportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machinereports', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('imagefile');
            $table->string('name');
            $table->string('email');
            $table->string('socialid');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('phonenumber');
            $table->string('classnumber');
            $table->string('classname');
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
        Schema::dropIfExists('machinereports');
    }
}

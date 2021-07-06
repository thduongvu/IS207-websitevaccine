<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmuniziersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immuniziers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idparent');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('sex');
            $table->date('dob');
            $table->string('identify_card')->nullable();
            $table->string('phone');
            $table->string('mail')->nullable();
            $table->string('permanent_address');
            $table->string('ward');
            $table->string('district');
            $table->string('city');
            $table->string('past_medical_history')->nullable();
            $table->string('rela')->nullable();
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
        Schema::dropIfExists('immuniziers');
    }
}

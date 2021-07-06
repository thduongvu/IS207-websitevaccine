<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmunizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immunizers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idparent');
            $table->string('fullname');
            $table->bigInteger('user_id');
            $table->string('sex');
            $table->date('dob');
            $table->string('identity_card')->nullable();
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
        Schema::dropIfExists('immunizers');
    }
}

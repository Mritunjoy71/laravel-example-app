<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            // $table->string('name')->nullable();
            // $table->string('email')->nullable();
            // $table->string('avatar')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            // $table->text('address')->nullable();
            // $table->bigInteger('phone')->nullable();
            // $table->string('company')->nullable();
            // $table->date('start_date')->nullable();
            // $table->date('end_date')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}

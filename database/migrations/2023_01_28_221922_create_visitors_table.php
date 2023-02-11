<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('password');
            $table->string('name');
            $table->string('gender');
            $table->integer('age_year')->nullable();
            $table->integer('age_month')->nullable();
            $table->date('date_birth')->nullable();
            $table->boolean('x1')->nullable();
            $table->boolean('x2')->nullable();
            $table->boolean('x3')->nullable();
            $table->boolean('x4')->nullable();
            $table->boolean('x5')->nullable();
            $table->boolean('x6')->nullable();
            $table->boolean('x7')->nullable();
            $table->boolean('x8')->nullable();
            $table->boolean('x9')->nullable();
            $table->integer('result_from_disease_id')->nullable();
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
        Schema::dropIfExists('visitors');
    }
};

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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->integer('age_year');
            $table->integer('age_month');
            $table->date('date_birth')->nullable();
            $table->boolean('x1');
            $table->boolean('x2');
            $table->boolean('x3');
            $table->boolean('x4');
            $table->boolean('x5');
            $table->boolean('x6');
            $table->boolean('x7');
            $table->boolean('x8');
            $table->boolean('x9');
            $table->integer('label_from_disease_id');
            $table->integer('result_from_disease_id');
            $table->boolean('is_correct');
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
        Schema::dropIfExists('tests');
    }
};

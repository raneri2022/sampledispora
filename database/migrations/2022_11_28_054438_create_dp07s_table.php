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
        Schema::create('dp07s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('n_id');//personal_id
            $table->foreign('n_id')->references('n_id')->on('dp05s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dp07002');// passport_id
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
        Schema::dropIfExists('dp07s');
    }
};

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
        Schema::create('dp19s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('highest_edu_lev_id');//personal_id
            $table->foreign('highest_edu_lev_id')->references('highest_edu_lev_id')->on('dp18s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dp19002');   // highest_education_field_name
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
        Schema::dropIfExists('dp19s');
    }
};

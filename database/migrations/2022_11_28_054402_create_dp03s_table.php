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
        Schema::create('dp03s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id');//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dp03002');//gender_namecountry_place_of_origin_name
            $table->string('dp03003');//state/regione_place_of_origin_name
            $table->string('dp03004');//village/town_place_of_origin_name

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
        Schema::dropIfExists('dp03s');
    }
};

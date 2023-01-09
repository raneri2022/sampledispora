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
        Schema::create('dp01s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id');//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dp01002');//gender_name //id = refd_01002
            $table->string('dp01003');//date_of_birth
            $table->string('dp01004');//place_of_birth_country_name_id
            $table->string('dp01005');//place_of_birth_state/region_name
            $table->string('dp01006');//place_of_birth_city_name
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
        Schema::dropIfExists('dp01s');
    }
};
//gender_name
//date_of_birth
//place_of_birth_country_name
//place_of_birth_state/region_name
//place_of_birth_city_name

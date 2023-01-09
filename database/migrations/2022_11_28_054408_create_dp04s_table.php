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
        Schema::create('dp04s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id');//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dp04002');//f_mother_name
            $table->string('dp04003');//m_mother_name
            $table->string('dp04004');//l_mother_name
            $table->string('dp04005');//mother_place_origin_country_name
//            $table->string('dp04006');//mother_place_origin_state_name
//            $table->string('dp04007');//mother_place_origin_city_name
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
        Schema::dropIfExists('dp04s');
    }
};

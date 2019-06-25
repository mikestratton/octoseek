<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('address');
            $table->string('county');
            $table->string('phone');
            $table->string('fax');
            $table->string('website');
            $table->string('name_last');
            $table->string('name_first');
            $table->string('title');
            $table->string('gender');
            $table->integer('employees');
            $table->integer('sales');
            $table->string('industry');
            $table->integer('sic_code');
            $table->string('sic_description');
            $table->string('credit_score_alpha');
            $table->integer('credit_score_numeric');
            $table->string('location_details');
            $table->integer('square_ft_min');
            $table->integer('square_ft_max');

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
        Schema::dropIfExists('manufactures');
    }
}

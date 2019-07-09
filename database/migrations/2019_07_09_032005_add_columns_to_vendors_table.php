<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->string('industry')->after('id');
            $table->string('sales')->after('id');
            $table->integer('employees')->after('id');
            $table->string('gender')->after('id');
            $table->string('title')->after('id');
            $table->string('name')->after('id');
            $table->string('fax')->after('id');
            $table->string('phone')->after('id');
            $table->string('county')->after('id');
            $table->string('address')->after('id');
            $table->integer('zip')->after('id');
            $table->string('state')->after('id');
            $table->string('city')->after('id');
            $table->string('company')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zip');
            $table->dropColumn('address');
            $table->dropColumn('county');
            $table->dropColumn('phone');
            $table->dropColumn('fax');
            $table->dropColumn('name');
            $table->dropColumn('title');
            $table->dropColumn('gender');
            $table->dropColumn('employees');
            $table->dropColumn('sales');
            $table->dropColumn('industry');
        });
    }
}

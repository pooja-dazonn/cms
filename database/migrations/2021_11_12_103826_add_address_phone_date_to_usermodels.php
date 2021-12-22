<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressPhoneDateToUsermodels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usermodels', function (Blueprint $table) {
          $table->string('address')->after('email');
          $table->integer('phone')->after('address');
          $table->integer('date')->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usermodels', function (Blueprint $table) {
           $table->dropColumn('address');
           $table->dropColumn('address');
           $table->dropColumn('date');
        });
    }
}

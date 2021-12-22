<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockportfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockportfolios', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('price');
            $table->string('date');
            $table->string('profit');
            $table->string('duration');
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
        Schema::dropIfExists('stockportfolios');
        $table->dropdown('image');
        $table->dropdown('price');
        $table->dropdown('date');
        $table->dropdown('profit');
        $table->dropdown('duration');
    }
}

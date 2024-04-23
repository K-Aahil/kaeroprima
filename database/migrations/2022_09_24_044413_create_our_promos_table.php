<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_promos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('our_service_id')->nullable();
            $table->string('package')->nullable();
            $table->string('title');
            $table->text('description');
            $table->bigInteger('price')->nullable();
            $table->bigInteger('discount_price')->nullable();
            $table->string('information')->nullable();
            $table->boolean('status');
            $table->dateTime('created_at', $precision = 0);
            $table->bigInteger('created_by')->nullable();
            $table->dateTime('updated_at', $precision = 0)->nullable();
            $table->bigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_promos');
    }
}

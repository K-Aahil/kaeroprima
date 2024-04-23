<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_list_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title_an')->nullable(true);
            $table->string('sub_title');
            $table->string('sub_title_an')->nullable(true);
            $table->string('description');
            $table->string('description_an')->nullable(true);
            $table->smallInteger('status')->nullable(true);

            $table->unsignedBigInteger('parent')->default(0);
            $table->integer('sort')->default(0);
            $table->unsignedBigInteger('short_list_id');
            $table->integer('depth')->default(0);
            $table->timestamps();

            $table->foreign('short_list_id')->references('id')->on('short_lists')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_list_items');
    }
}

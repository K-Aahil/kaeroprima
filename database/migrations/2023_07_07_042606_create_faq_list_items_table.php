<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_list_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title_an')->nullable(true);
            $table->string('sub_title')->nullable(true);
            $table->string('sub_title_an')->nullable(true);
            $table->longtext('description');
            $table->longtext('description_an')->nullable(true);
            $table->string('url')->nullable(true);
            $table->string('image')->nullable(true);
            $table->smallInteger('status')->nullable(true);         

            $table->unsignedBigInteger('parent')->default(0);
            $table->integer('sort')->default(0);
            $table->unsignedBigInteger('faq_list_id');
            $table->integer('depth')->default(0);
            $table->timestamps();

            $table->foreign('faq_list_id')->references('id')->on('faq_lists')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_list_items');
    }
}

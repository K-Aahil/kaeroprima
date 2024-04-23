<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSubTitleToAboutUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('sub_title')->after('title');
            $table->string('how_sub_title')->after('how_title');
            $table->text('button_text')->nullable()->after('image_front');
            $table->text('button_url')->nullable()->after('button_text');
            $table->text('button_url_make')->nullable()->after('button_url');
            $table->string('title_an')->nullable()->after('how_description');
            $table->string('sub_title_an')->nullable()->after('title_an');
            $table->text('description_an')->nullable()->after('sub_title_an');
            $table->string('how_title_an')->nullable()->after('description_an');
            $table->string('how_sub_title_an')->nullable()->after('how_title_an');
            $table->text('how_description_an')->nullable()->after('how_sub_title_an');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_us', function (Blueprint $table) {
            //
        });
    }
}

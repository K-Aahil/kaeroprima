<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDirectorTitleAnOnAboutUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('director_title_an')->nullable()->change();
            $table->string('director_sub_title_an')->nullable()->change();
            $table->longText('director_description_an')->nullable()->change();
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
            $table->dropColumn('director_title_an')->nullable()->change();
            $table->dropColumn('director_sub_title_an')->nullable()->change();
            $table->dropColumn('director_description_an')->nullable()->change();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnDescriptionOnDirectorListItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('director_list_items', function (Blueprint $table) {
            $table->longtext('description')->change();
            $table->longtext('description_an')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('director_list_items', function (Blueprint $table) {
            $table->longtext('description')->change();
            $table->longtext('description_an')->nullable(true)->change();
        });
    }
}

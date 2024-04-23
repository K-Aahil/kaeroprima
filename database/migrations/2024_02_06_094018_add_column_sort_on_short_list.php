<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSortOnShortList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('short_lists', function (Blueprint $table) {
            $table->integer("sort")->nullable()->after('id');
            $table->string("code")->nullable()->after('name');
            $table->longText("description")->nullable()->after('code');
            $table->longText("image")->nullable()->after('description');
            $table->boolean("status")->default(1)->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('short_lists', function (Blueprint $table) {
            //
        });
    }
}

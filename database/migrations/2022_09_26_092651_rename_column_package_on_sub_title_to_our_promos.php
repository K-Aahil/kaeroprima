<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnPackageOnSubTitleToOurPromos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_promos', function (Blueprint $table) {
            $table->renameColumn('package','sub_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_promos', function (Blueprint $table) {
            $table->renameColumn('sub_title','package');
        });
    }
}

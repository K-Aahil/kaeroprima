<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnParentsToOurGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_groups', function (Blueprint $table) {
            $table->integer('parent')->after('status')->default(0);
            $table->integer('sort')->after('parent')->default(0);
            $table->bigInteger('our_partner_id')->after('sort')->default(0);
            $table->integer('depth')->after('our_partner_id')->default(0);
        });
    }           

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_groups', function (Blueprint $table) {
            //
        });
    }
}

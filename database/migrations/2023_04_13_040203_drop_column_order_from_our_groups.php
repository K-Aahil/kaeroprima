<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnOrderFromOurGroups extends Migration
{
    public function up()
    {
        Schema::table('our_groups', function($table) {
            $table->dropColumn('order');
            $table->dropColumn('name');
        });
    }

    public function down()
    {
        Schema::table('our_groups', function($table) {
            $table->integer('order');
            $table->string('name');
        });
    }
}

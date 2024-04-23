<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVisiOnAboutUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('visi_title')->after('show_button');
            $table->string('visi_sub_title')->after('visi_title');
            $table->text('visi_image')->nullable(true)->after('visi_sub_title');
            $table->longText('visi')->after('visi_image');
            $table->longText('misi')->after('visi');
            $table->string('employees_title')->after('misi');
            $table->string('employees_sub_title')->after('employees_title');
            $table->text('employees_image')->nullable(true)->after('employees_sub_title');
            $table->longText('employees_caption')->after('employees_image');
            $table->longText('employees_description')->after('employees_caption');
            $table->string('director_title')->after('employees_description');
            $table->string('director_sub_title')->after('director_title');
            $table->longText('director_description')->after('director_sub_title');
            $table->string('visi_title_an')->nullable(true)->after('director_description');
            $table->string('visi_sub_title_an')->nullable(true)->after('visi_title_an');
            $table->longText('visi_an')->nullable(true)->after('visi_sub_title_an');
            $table->longText('misi_an')->nullable(true)->after('visi_an');
            $table->string('employees_title_an')->nullable(true)->after('misi_an');
            $table->string('employees_sub_title_an')->nullable(true)->after('employees_title_an');
            $table->longText('employees_caption_an')->nullable(true)->after('employees_sub_title_an');
            $table->longText('employees_description_an')->nullable(true)->after('employees_caption_an');
            $table->string('director_title_an')->after('employees_description_an');
            $table->string('director_sub_title_an')->after('director_title_an');
            $table->longText('director_description_an')->after('director_sub_title_an');
            $table->boolean('same_as_default1')->default(1)->after('director_description_an');
            $table->boolean('same_as_default2')->default(1)->after('same_as_default1');
            $table->boolean('same_as_default3')->default(1)->after('same_as_default2');
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

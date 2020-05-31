<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostAdditionalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // append 
        Schema::table('posts', function (Blueprint $table) {
            $table->string('short_desc')->nullable()->default('Short Description');
            $table->string('table')->nullable()->default('Tables');
            $table->string('reference')->nullable()->default('References');
            $table->string('picture')->nullable()->default('noImage.png');
            $table->string('file')->nullable()->default('templateFile.pdf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('short_desc')->nullable()->default('Short Description');
            $table->dropColumn('table')->nullable()->default('Tables');
            $table->dropColumn('reference')->nullable()->default('References');
            $table->dropColumn('picture')->nullable()->default('noImage.png');
            $table->dropColumn('file')->nullable()->default('templateFile.pdf');
        });
    }
}

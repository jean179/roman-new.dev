<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function ($table)
        {
            $table->increments('id');
            // Content
            $table->string('title', 100);
            $table->text('body');
            $table->string('introtext', 200);
            $table->string('image', 200);
            $table->string('author', 100);
            // SEO
            $table->string('description', 250);
            $table->string('keywords', 100);
            $table->string('slug', 200);
            $table->string('breadcrumb', 200);
            // Administration
            $table->boolean('enabled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }

}

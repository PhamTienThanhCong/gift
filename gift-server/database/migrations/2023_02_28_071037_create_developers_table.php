<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('avatar', 100);
            $table->string('position', 100);
            $table->string('description', 250);
            $table->string('facebook', 200)->default('https://www.facebook.com/');
            $table->string('email', 200)->default('https://www.gmail.com/');
            $table->string('github', 200)->default('https://www.github.com/');
            $table->string('instagram', 200)->default('https://www.instagram.com/');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developers');
    }
}

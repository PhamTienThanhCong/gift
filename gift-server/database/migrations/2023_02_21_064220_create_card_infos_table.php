<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned();
            $table->string('url', 50)->unique();
            $table->bigInteger('themeLanding')->unsigned();
            $table->json('config');
            $table->json('response');
            $table->integer('view')->default(0);
            $table->integer('maxview')->default(0);
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('themeLanding')->references('id')->on('card_configs');
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
        Schema::dropIfExists('card_infos');
    }
}

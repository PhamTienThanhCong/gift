<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_configs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cardId')->unsigned();
            $table->string('name', 255);
            $table->string('url', 50)->unique();
            $table->string('img', 255);
            $table->string('template', 100);
            $table->text('description');
            $table->text('config');
            $table->foreign('cardId')->references('id')->on('card_types');
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
        Schema::dropIfExists('card_configs');
    }
}

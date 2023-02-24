<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_configs', function (Blueprint $table) {
            $table->id();
            $table->string("title", 70)->nullable();
            $table->string("description", 160)->nullable();
            $table->string("description_2", 255)->nullable();
            $table->string("img", 255)->nullable();
            $table->string("web_name", 25)->nullable();
            $table->string("address", 255)->nullable();
            $table->string("phone", 12)->nullable();
            $table->string("email", 100)->nullable();
            $table->json("social")->nullable();
            
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
        Schema::dropIfExists('web_configs');
    }
}

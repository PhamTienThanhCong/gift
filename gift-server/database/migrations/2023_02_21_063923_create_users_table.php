<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullName', 50);
            $table->string('userName', 20)->unique();
            $table->date('birthday')->nullable();
            $table->string('email', 100)->unique();
            $table->string('phone', 11)->nullable();
            $table->string('password', 255);
            $table->integer('isAdmin')->default(0);
            $table->integer('confirmed')->default(0);
            $table->integer('banned')->default(0);
            $table->integer('themeLanding')->default(0);
            $table->string('accessToken', 255)->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

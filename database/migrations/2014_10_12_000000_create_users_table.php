<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            //atribut Umum
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->char('role',1);
            $table->string('noktp')->nullable(true);
            $table->string('telepon')->nullable(true);
            $table->date('tgllahir')->nullable(true);

            $table->string('foto')->nullable(true);
            $table->string('berkas')->nullable(true);
            $table->string('alamat')->nullable(true);

            $table->rememberToken();
            $table->timestamps();

            //atribut Pekerja Only
            $table->string('status')->nullable(true);
            $table->string('domisili')->nullable(true);
            $table->string('kelahiran')->nullable(true);
            $table->text('pengalaman')->nullable(true);
            $table->text('ulasan')->nullable(true);
            $table->string('ulasan')->nullable(true);
            $table->char('skill',2)->nullable(true);
            
            //atribut Agen Only
            $table->string('ulasan')->nullable(true);
            
            //atribut Majikan Only
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

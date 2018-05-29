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
            $table->string('kelamin')->nullable(true);

            $table->string('foto')->nullable(true);
            $table->string('berkas')->nullable(true);
            $table->string('alamat')->nullable(true);

            $table->rememberToken();
            $table->timestamps();

            //atribut Pekerja Only
            $table->integer('P_berat')->nullable(true);
            $table->integer('P_tinggi')->nullable(true);
            $table->string('P_agama')->nullable(true);
            $table->string('P_status')->nullable(true);
            $table->string('P_domisili')->nullable(true);
            $table->string('P_kelahiran')->nullable(true);
            $table->text('P_pengalaman')->nullable(true);
            $table->string('P_keahlian')->nullable(true);
            $table->string('P_penyalur')->nullable(true);
            $table->string('P_verifikasi_penyalur')->nullable(true);
            $table->string('P_statuskerja')->nullable(true);
            
            $table->string('P_pekerjaan')->nullable(true);
            $table->char('P_ketersediaan',2)->nullable(true);

            $table->string('P_gaji')->nullable(true);
            $table->string('P_anak')->nullable(true);
            $table->string('P_menginap')->nullable(true);
            $table->string('P_anjing')->nullable(true);
            $table->string('P_bahasa')->nullable(true);
            $table->string('P_pendidikan')->nullable(true);
            $table->string('P_bisabekerjadi')->nullable(true);



            
            //atribut Agen Only
            $table->string('A_website')->nullable(true);            
            $table->string('A_deskripsi')->nullable(true);


            //majikan
            


            

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

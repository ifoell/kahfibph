<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiwa_id');
            $table->string('birthplace', 32);
            $table->date('birthdate');
            $table->text('address')->nullable(TRUE);
            $table->text('domicile')->nullable(TRUE);
            $table->enum('marital_status', ['single', 'married', 'widow']);
            $table->string('profession', 254)->nullable(true);
            $table->string('workplace', 254)->nullable(true);
            $table->enum('last_edu', ['SD/setara', 'SMP/setara', 'SMA/setara', 'D1', 'D2', 'D3', 'D4/S1', 'S2', 'S3']);
            $table->enum('blood_type', ['A', 'B', 'AB', 'O']);
            $table->enum('rh', ['+', '-'])->default('+');
            $table->string('instagram', 128)->nullable(true);
            $table->string('facebook', 128)->nullable(true);
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
        Schema::dropIfExists('mahasiswa_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('santri_jenis')->nullable();
            $table->string('santri_name');
            $table->string('santri_gender');
            $table->longText('santri_alamat');
            $table->string('santri_tempatlahir');
            $table->string('santri_tanggallahir');
            $table->string('santri_namaayah')->nullable();
            $table->string('santri_namaibu')->nullable();
            $table->string('santri_telpayah')->nullable();
            $table->string('santri_telpibu')->nullable();
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
        Schema::dropIfExists('santris');
    }
}

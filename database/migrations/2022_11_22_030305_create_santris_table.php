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
            $table->unsignedBigInteger('program_id')->nullable();
            $table->string('santri_slug');
            $table->string('santri_name');
            $table->string('santri_nik');
            $table->string('santri_nisn');
            $table->string('santri_tempatlahir');
            $table->string('santri_tanggallahir');
            $table->string('santri_gender');
            $table->string('santri_anaknomor');
            $table->string('santri_bersaudara')->nullable();
            $table->longText('santri_alamat');
            $table->string('santri_tinggibadan');
            $table->string('santri_beratbadan');
            $table->string('santri_riwayatsakit')->nullable();
            $table->string('santri_riwayatopname')->nullable();
            $table->string('santri_statuskeluarga');
            $table->string('santri_asalsekolah');
            $table->string('santri_alamatsekolah')->nullable();
            $table->string('status')->nullable();
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

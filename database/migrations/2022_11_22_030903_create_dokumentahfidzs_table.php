<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumentahfidzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumentahfidzs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('santri_id');
            $table->string('rapot_skhu')->nullable();
            $table->string('kk')->nullable();
            $table->string('akte')->nullable();
            $table->string('ktp_ortu')->nullable();
            $table->string('pas_photo')->nullable();
            $table->string('keterangan_sehat')->nullable();
            $table->string('keterangan_kelakuanbaik')->nullable();
            $table->string('vaksin')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('pembayaran_formulir')->nullable();
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
        Schema::dropIfExists('dokumentahfidzs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('santri_id');
            $table->string('dokumen_rapot');
            $table->string('dokumen_kk');
            $table->string('dokumen_akta');
            $table->string('dokumen_ktp');
            $table->string('dokumen_foto');
            $table->string('dokumen_suratsehat')->nullable();
            $table->string('dokumen_suratbaik')->nullable();
            $table->string('dokumen_vaksin');
            $table->string('dokumen_prestasi')->nullable();
            $table->string('dokumen_tfformulir');
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
        Schema::dropIfExists('dokumens');
    }
}

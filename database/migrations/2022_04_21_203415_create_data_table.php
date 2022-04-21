<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigInteger('idBarang')->primary()->unsigned();
            $table->bigInteger('kode_jenis')->unsigned();
            $table->foreign('kode_jenis')->references('kodeJenis')->on('jenis')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('id_merk')->unsigned();
            $table->foreign('id_merk')->references('idMerk')->on('merks')->onUpdate('cascade')->onDelete('cascade');
            $table->string('series');
            $table->date('serialNumber');
            $table->string('tanggalPengadaan');
            $table->string('spek');
            $table->string('ket');
            $table->string('lokasi');
            $table->string('status');
            $table->string('noInventory');
            $table->string('stiker');
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
        Schema::dropIfExists('data');
    }
}

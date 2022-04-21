<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merks', function (Blueprint $table) {
            $table->bigInteger('idMerk')->unsigned()->primary();
            $table->bigInteger('kode_jenis')->unsigned();
            $table->foreign('kode_jenis')->references('kodeJenis')->on('jenis')->onUpdate('cascade')->onDelete('cascade');
            $table->string('namaMerk');
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
        Schema::dropIfExists('merks');
    }
}

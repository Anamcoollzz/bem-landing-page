<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_periode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('periode_id')->unsigned()->nullable();
            $table->foreign('periode_id')->references('id')->on('periode')->onUpdate('cascade')->onDelete('set null');
            $table->bigInteger('anggota_id')->unsigned()->nullable();
            $table->foreign('anggota_id')->references('id')->on('anggota')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('anggota_periode');
    }
}

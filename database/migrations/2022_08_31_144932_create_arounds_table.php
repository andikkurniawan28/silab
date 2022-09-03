<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arounds', function (Blueprint $table) {
            $table->id();
            $table->integer('tek_pe1')->nullable();
            $table->integer('tek_pe2')->nullable();
            $table->integer('tek_evap1')->nullable();
            $table->integer('tek_evap2')->nullable();
            $table->integer('tek_evap3')->nullable();
            $table->integer('tek_evap4')->nullable();
            $table->integer('tek_evap5')->nullable();
            $table->integer('tek_evap6')->nullable();
            $table->integer('tek_evap7')->nullable();
            $table->integer('tek_pan1')->nullable();
            $table->integer('tek_pan2')->nullable();
            $table->integer('tek_pan3')->nullable();
            $table->integer('tek_pan4')->nullable();
            $table->integer('tek_pan5')->nullable();
            $table->integer('tek_pan6')->nullable();
            $table->integer('tek_pan7')->nullable();
            $table->integer('tek_pan8')->nullable();
            $table->integer('tek_pan9')->nullable();
            $table->integer('tek_pan10')->nullable();
            $table->integer('tek_pan11')->nullable();
            $table->integer('tek_pan12')->nullable();
            $table->integer('tek_pan13')->nullable();
            $table->integer('tek_pan14')->nullable();
            $table->integer('tek_vakum')->nullable();
            $table->integer('suhu_pe1')->nullable();
            $table->integer('suhu_pe2')->nullable();
            $table->integer('suhu_evap1')->nullable();
            $table->integer('suhu_evap2')->nullable();
            $table->integer('suhu_evap3')->nullable();
            $table->integer('suhu_evap4')->nullable();
            $table->integer('suhu_evap5')->nullable();
            $table->integer('suhu_evap6')->nullable();
            $table->integer('suhu_evap7')->nullable();
            $table->integer('suhu_heater1')->nullable();
            $table->integer('suhu_heater2')->nullable();
            $table->integer('suhu_heater3')->nullable();
            $table->integer('suhu_air_injeksi')->nullable();
            $table->integer('suhu_air_terjun')->nullable();
            $table->integer('uap_baru')->nullable();
            $table->integer('uap_bekas')->nullable();
            $table->integer('uap_3ato')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arounds');
    }
};

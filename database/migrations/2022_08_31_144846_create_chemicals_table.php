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
        Schema::create('chemicals', function (Blueprint $table) {
            $table->id();
            $table->integer('kapur')->nullable();
            $table->integer('belerang')->nullable();
            $table->integer('floc')->nullable();
            $table->integer('naoh')->nullable();
            $table->integer('b894')->nullable();
            $table->integer('b895')->nullable();
            $table->integer('b210')->nullable();
            $table->integer('asam_phospat')->nullable();
            $table->integer('blotong')->nullable();
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
        Schema::dropIfExists('chemicals');
    }
};

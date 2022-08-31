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
        Schema::create('saccharomats', function (Blueprint $table) {
            $table->id();
            $table->integer('sampling_id')->index()->unique();
            $table->float('pol');
            $table->float('percent_brix')->nullable();
            $table->float('percent_pol')->nullable();
            $table->float('purity')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saccharomats');
    }
};

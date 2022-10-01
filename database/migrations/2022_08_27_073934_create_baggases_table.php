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
        Schema::create('baggases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sampling_id')->index()->unique();
            $table->float('corrected_pol');
            $table->float('dry');
            $table->float('water');
            $table->string('analyst')->nullable();
            $table->string('leader')->nullable();
            $table->tinyInteger('is_corrected')->default(0);
            $table->tinyInteger('is_verified')->default(0);
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
        Schema::dropIfExists('baggases');
    }
};

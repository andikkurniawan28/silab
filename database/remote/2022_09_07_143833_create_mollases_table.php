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
        Schema::connection('timbangan_tetes')
        ->create('mollases', function (Blueprint $table) {
            $table->id();
            $table->integer('tarra');
            $table->integer('bruto');
            $table->integer('netto');
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
        Schema::connection('timbangan_tetes')->dropIfExists('mollases');
    }
};

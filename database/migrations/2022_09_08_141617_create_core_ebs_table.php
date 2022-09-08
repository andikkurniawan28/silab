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
        Schema::connection('core_eb')->create('core_ebs', function (Blueprint $table) {
            $table->id();
            $table->string('barcode_antrian')->unique();
            $table->string('rfid_ember')->nullable();
            $table->string('register')->nullable();
            $table->float('brix_nira')->nullable();
            $table->float('pol_nira')->nullable();
            $table->float('rendemen')->nullable();
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
        Schema::connection('core_eb')->dropIfExists('core_ebs');
    }
};

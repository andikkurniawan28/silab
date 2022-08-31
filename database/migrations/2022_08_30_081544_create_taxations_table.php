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
        Schema::create('taxations', function (Blueprint $table) {
            $table->id();
            $table->string('opr');
            $table->string('role_id');
            $table->integer('peti_nira_mentah')->nullable();
            $table->integer('pemanas_nira_mentah')->nullable();
            $table->integer('reaction_tank')->nullable();
            $table->integer('defekator')->nullable();
            $table->integer('clarifier_st')->nullable();
            $table->integer('pemanas_nira_encer')->nullable();
            $table->integer('evap1')->nullable();
            $table->integer('evap2')->nullable();
            $table->integer('evap3')->nullable();
            $table->integer('evap4')->nullable();
            $table->integer('evap5')->nullable();
            $table->integer('evap6')->nullable();
            $table->integer('evap7')->nullable();
            $table->integer('evap8')->nullable();
            $table->integer('evap9')->nullable();
            $table->integer('nk_sebelum_sulfitasi')->nullable();
            $table->integer('nk_sulfitasi_atas')->nullable();
            $table->integer('nk_sulfitasi_bawah')->nullable();
            $table->integer('klare_shs_atas')->nullable();
            $table->integer('klare_shs_bawah')->nullable();
            $table->integer('pan1')->nullable();
            $table->integer('pan2')->nullable();
            $table->integer('pan3')->nullable();
            $table->integer('pan4')->nullable();
            $table->integer('pan5')->nullable();
            $table->integer('pan6')->nullable();
            $table->integer('pan7')->nullable();
            $table->integer('pan8')->nullable();
            $table->integer('pan9')->nullable();
            $table->integer('pan10')->nullable();
            $table->integer('pan11')->nullable();
            $table->integer('pan12')->nullable();
            $table->integer('pan13')->nullable();
            $table->integer('pan14')->nullable();
            $table->integer('pan15')->nullable();
            $table->integer('pan16')->nullable();
            $table->integer('pan17')->nullable();
            $table->integer('pan18')->nullable();
            $table->integer('palung1')->nullable();
            $table->integer('palung2')->nullable();
            $table->integer('palung3')->nullable();
            $table->integer('palung4')->nullable();
            $table->integer('palung5')->nullable();
            $table->integer('palung6')->nullable();
            $table->integer('palung7')->nullable();
            $table->integer('palung8')->nullable();
            $table->integer('palung9')->nullable();
            $table->integer('palung10')->nullable();
            $table->integer('dist_mixer_a_utara')->nullable();
            $table->integer('dist_mixer_a_selatan')->nullable();
            $table->integer('cvp_c')->nullable();
            $table->integer('palung_cvp_c')->nullable();
            $table->integer('dist_mixer_c_timur')->nullable();
            $table->integer('dist_mixer_c_barat')->nullable();
            $table->integer('cvp_d')->nullable();
            $table->integer('palung_cvp_d')->nullable();
            $table->integer('vertical_timur')->nullable();
            $table->integer('vertical_barat')->nullable();
            $table->integer('dist_mixer_d1')->nullable();
            $table->integer('dist_mixer_d2')->nullable();
            $table->integer('stroop_a_atas')->nullable();
            $table->integer('stroop_a_bawah')->nullable();
            $table->integer('stroop_c_atas')->nullable();
            $table->integer('stroop_c_bawah')->nullable();
            $table->integer('klare_d_atas')->nullable();
            $table->integer('klare_d_bawah')->nullable();
            $table->integer('einwuurf_c')->nullable();
            $table->integer('einwuurf_d')->nullable();
            $table->integer('clear_liquor_1')->nullable();
            $table->integer('clear_liquor_2')->nullable();
            $table->integer('remelt_a')->nullable();
            $table->integer('r1_mol_atas')->nullable();
            $table->integer('r2_mol_atas')->nullable();
            $table->integer('r1_mol_bawah')->nullable();
            $table->integer('r2_mol_bawah')->nullable();
            $table->integer('remelter_a1')->nullable();
            $table->integer('remelter_a2')->nullable();
            $table->integer('remelter_cd')->nullable();
            $table->integer('mingler_atas')->nullable();
            $table->integer('mingler_bawah')->nullable();
            $table->integer('silo_retail')->nullable();
            $table->integer('shs_silo')->nullable();
            $table->integer('pp')->nullable();
            $table->integer('reaction_tank_drk')->nullable();
            $table->integer('talo_phospatasi')->nullable();
            $table->integer('deep_bad_filter')->nullable();
            $table->integer('co2_gas_carbonator1')->nullable();
            $table->integer('co2_gas_carbonator2')->nullable();
            $table->integer('first_filtrat_tank')->nullable();
            $table->integer('sweet_water_tank')->nullable();
            $table->integer('clear_liquor_tank1')->nullable();
            $table->integer('clear_liquor_tank2')->nullable();
            $table->integer('carbonated_liquor_tank1')->nullable();
            $table->integer('carbonated_liquor_tank2')->nullable();
            $table->integer('raw_liquor_tank1')->nullable();
            $table->integer('raw_liquor_tank2')->nullable();
            $table->integer('clarifier_melt_tank1')->nullable();
            $table->integer('clarifier_melt_tank2')->nullable();
            $table->integer('filtered_melt_tank1')->nullable();
            $table->integer('filtered_melt_tank2')->nullable();
            $table->integer('back_wash_tank1')->nullable();
            $table->integer('back_wash_tank2')->nullable();
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
        Schema::dropIfExists('taxations');
    }
};

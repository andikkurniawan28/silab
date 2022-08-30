@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('Taksasi') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="" width="100%" cellspacing="0">
                    <thead>
                    @foreach ($taxations as $taxation)
                    <tr>
                        <th>created</th>
                        <td>{{ $taxation->created_at }}</td>
                    </tr>
                    <tr>
                        <th>pic</th>
                        <td>{{ $taxation->opr }}</td>
                    </tr>
                    <tr>
                        <th>peti_nira_mentah</th>
                        <td>{{ $taxation->peti_nira_mentah }}</td>
                    </tr>
                    <tr>
                        <th>pemanas_nira_mentah</th>
                        <td>{{ $taxation->pemanas_nira_mentah }}</td>
                    </tr>
                    <tr>
                        <th>reaction_tank</th>
                        <td>{{ $taxation->reaction_tank }}</td>
                    </tr>
                    <tr>
                        <th>defekator</th>
                        <td>{{ $taxation->defekator }}</td>
                    </tr>
                    <tr>
                        <th>clarifier_st</th>
                        <td>{{ $taxation->clarifier_st }}</td>
                    </tr>
                    <tr>
                        <th>pemanas_nira_encer</th>
                        <td>{{ $taxation->pemanas_nira_encer }}</td>
                    </tr>
                    <tr>
                        <th>evap1</th>
                        <td>{{ $taxation->evap1 }}</td>
                    </tr>
                    <tr>
                        <th>evap2</th>
                        <td>{{ $taxation->evap2 }}</td>
                    </tr>
                    <tr>
                        <th>evap3</th>
                        <td>{{ $taxation->evap3 }}</td>
                    </tr>
                    <tr>
                        <th>evap4</th>
                        <td>{{ $taxation->evap4 }}</td>
                    </tr>
                    <tr>
                        <th>evap5</th>
                        <td>{{ $taxation->evap5 }}</td>
                    </tr>
                    <tr>
                        <th>evap6</th>
                        <td>{{ $taxation->evap6 }}</td>
                    </tr>
                    <tr>
                        <th>evap7</th>
                        <td>{{ $taxation->evap7 }}</td>
                    </tr>
                    <tr>
                        <th>evap8</th>
                        <td>{{ $taxation->evap8 }}</td>
                    </tr>
                    <tr>
                        <th>evap9</th>
                        <td>{{ $taxation->evap9 }}</td>
                    </tr>
                    <tr>
                        <th>nk_sebelum_sulfitasi</th>
                        <td>{{ $taxation->nk_sebelum_sulfitasi }}</td>
                    </tr>
                    <tr>
                        <th>nk_sulfitasi_atas</th>
                        <td>{{ $taxation->nk_sulfitasi_atas }}</td>
                    </tr>
                    <tr>
                        <th>nk_sulfitasi_bawah</th>
                        <td>{{ $taxation->nk_sulfitasi_bawah }}</td>
                    </tr>
                    <tr>
                        <th>klare_shs_atas</th>
                        <td>{{ $taxation->klare_shs_atas }}</td>
                    </tr>
                    <tr>
                        <th>klare_shs_bawah</th>
                        <td>{{ $taxation->klare_shs_bawah }}</td>
                    </tr>
                    <tr>
                        <th>pan1</th>
                        <td>{{ $taxation->pan1 }}</td>
                    </tr>
                    <tr>
                        <th>pan2</th>
                        <td>{{ $taxation->pan2 }}</td>
                    </tr>
                    <tr>
                        <th>pan3</th>
                        <td>{{ $taxation->pan3 }}</td>
                    </tr>
                    <tr>
                        <th>pan4</th>
                        <td>{{ $taxation->pan4 }}</td>
                    </tr>
                    <tr>
                        <th>pan5</th>
                        <td>{{ $taxation->pan5 }}</td>
                    </tr>
                    <tr>
                        <th>pan6</th>
                        <td>{{ $taxation->pan6 }}</td>
                    </tr>
                    <tr>
                        <th>pan7</th>
                        <td>{{ $taxation->pan7 }}</td>
                    </tr>
                    <tr>
                        <th>pan8</th>
                        <td>{{ $taxation->pan8 }}</td>
                    </tr>
                    <tr>
                        <th>pan9</th>
                        <td>{{ $taxation->pan9 }}</td>
                    </tr>
                    <tr>
                        <th>pan10</th>
                        <td>{{ $taxation->pan10 }}</td>
                    </tr>
                    <tr>
                        <th>pan11</th>
                        <td>{{ $taxation->pan11 }}</td>
                    </tr>
                    <tr>
                        <th>pan12</th>
                        <td>{{ $taxation->pan12 }}</td>
                    </tr>
                    <tr>
                        <th>pan13</th>
                        <td>{{ $taxation->pan13 }}</td>
                    </tr>
                    <tr>
                        <th>pan14</th>
                        <td>{{ $taxation->pan14 }}</td>
                    </tr>
                    <tr>
                        <th>palung1</th>
                        <td>{{ $taxation->palung1 }}</td>
                    </tr>
                    <tr>
                        <th>palung2</th>
                        <td>{{ $taxation->palung2 }}</td>
                    </tr>
                    <tr>
                        <th>palung3</th>
                        <td>{{ $taxation->palung3 }}</td>
                    </tr>
                    <tr>
                        <th>palung4</th>
                        <td>{{ $taxation->palung4 }}</td>
                    </tr>
                    <tr>
                        <th>palung5</th>
                        <td>{{ $taxation->palung5 }}</td>
                    </tr>
                    <tr>
                        <th>palung6</th>
                        <td>{{ $taxation->palung6 }}</td>
                    </tr>
                    <tr>
                        <th>palung7</th>
                        <td>{{ $taxation->palung7 }}</td>
                    </tr>
                    <tr>
                        <th>palung8</th>
                        <td>{{ $taxation->palung8 }}</td>
                    </tr>
                    <tr>
                        <th>palung9</th>
                        <td>{{ $taxation->palung9 }}</td>
                    </tr>
                    <tr>
                        <th>palung10</th>
                        <td>{{ $taxation->palung10 }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_a_utara</th>
                        <td>{{ $taxation->dist_mixer_a_utara }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_a_selatan</th>
                        <td>{{ $taxation->dist_mixer_a_selatan }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_a_selatan</th>
                        <td>{{ $taxation->dist_mixer_a_selatan }}</td>
                    </tr>
                    <tr>
                        <th>cvp_c</th>
                        <td>{{ $taxation->cvp_c }}</td>
                    </tr>
                    <tr>
                        <th>palung_cvp_c</th>
                        <td>{{ $taxation->palung_cvp_c }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_c_barat</th>
                        <td>{{ $taxation->dist_mixer_c_barat }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_c_timur</th>
                        <td>{{ $taxation->dist_mixer_c_timur }}</td>
                    </tr>
                    <tr>
                        <th>cvp_d</th>
                        <td>{{ $taxation->cvp_d }}</td>
                    </tr>
                    <tr>
                        <th>palung_cvp_d</th>
                        <td>{{ $taxation->palung_cvp_d }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_d1</th>
                        <td>{{ $taxation->dist_mixer_d1 }}</td>
                    </tr>
                    <tr>
                        <th>dist_mixer_d2</th>
                        <td>{{ $taxation->dist_mixer_d2 }}</td>
                    </tr>
                    <tr>
                        <th>vertical_barat</th>
                        <td>{{ $taxation->vertical_barat }}</td>
                    </tr>
                    <tr>
                        <th>vertical_timur</th>
                        <td>{{ $taxation->vertical_timur }}</td>
                    </tr>
                    <tr>
                        <th>stroop_a_atas</th>
                        <td>{{ $taxation->stroop_a_atas }}</td>
                    </tr>
                    <tr>
                        <th>stroop_a_bawah</th>
                        <td>{{ $taxation->stroop_a_bawah }}</td>
                    </tr>
                    <tr>
                        <th>stroop_c_atas</th>
                        <td>{{ $taxation->stroop_c_atas }}</td>
                    </tr>
                    <tr>
                        <th>stroop_c_bawah</th>
                        <td>{{ $taxation->stroop_c_bawah }}</td>
                    </tr>
                    <tr>
                        <th>klare_d_atas</th>
                        <td>{{ $taxation->klare_d_atas }}</td>
                    </tr>
                    <tr>
                        <th>klare_d_bawah</th>
                        <td>{{ $taxation->klare_d_bawah }}</td>
                    </tr>
                    <tr>
                        <th>einwuurf_c</th>
                        <td>{{ $taxation->einwuurf_c }}</td>
                    </tr>
                    <tr>
                        <th>einwuurf_d</th>
                        <td>{{ $taxation->einwuurf_d }}</td>
                    </tr>
                    <tr>
                        <th>clear_liquor_1</th>
                        <td>{{ $taxation->clear_liquor_1 }}</td>
                    </tr>
                    <tr>
                        <th>clear_liquor_2</th>
                        <td>{{ $taxation->clear_liquor_2 }}</td>
                    </tr>
                    <tr>
                        <th>remelt_a</th>
                        <td>{{ $taxation->remelt_a }}</td>
                    </tr>
                    <tr>
                        <th>r1_mol_atas</th>
                        <td>{{ $taxation->r1_mol_atas }}</td>
                    </tr>
                    <tr>
                        <th>r2_mol_atas</th>
                        <td>{{ $taxation->r2_mol_atas }}</td>
                    </tr>
                    <tr>
                        <th>r1_mol_bawah</th>
                        <td>{{ $taxation->r1_mol_bawah }}</td>
                    </tr>
                    <tr>
                        <th>r2_mol_bawah</th>
                        <td>{{ $taxation->r2_mol_bawah }}</td>
                    </tr>
                    <tr>
                        <th>remelter_a1</th>
                        <td>{{ $taxation->remelter_a1 }}</td>
                    </tr>
                    <tr>
                        <th>remelter_a2</th>
                        <td>{{ $taxation->remelter_a2 }}</td>
                    </tr>
                    <tr>
                        <th>remelter_cd</th>
                        <td>{{ $taxation->remelter_cd }}</td>
                    </tr>
                    <tr>
                        <th>mingler_atas</th>
                        <td>{{ $taxation->mingler_atas }}</td>
                    </tr>
                    <tr>
                        <th>mingler_bawah</th>
                        <td>{{ $taxation->mingler_bawah }}</td>
                    </tr>
                    <tr>
                        <th>silo_retail</th>
                        <td>{{ $taxation->silo_retail }}</td>
                    </tr>
                    <tr>
                        <th>shs_silo</th>
                        <td>{{ $taxation->shs_silo }}</td>
                    </tr>
                    <tr>
                        <th>pp</th>
                        <td>{{ $taxation->pp }}</td>
                    </tr>
                    <tr>
                        <th>reaction_tank_drk</th>
                        <td>{{ $taxation->reaction_tank_drk }}</td>
                    </tr>
                    <tr>
                        <th>talo_phospatasi</th>
                        <td>{{ $taxation->talo_phospatasi }}</td>
                    </tr>
                    <tr>
                        <th>deep_bad_filter</th>
                        <td>{{ $taxation->deep_bad_filter }}</td>
                    </tr>
                    <tr>
                        <th>co2_gas_carbonator1</th>
                        <td>{{ $taxation->co2_gas_carbonator1 }}</td>
                    </tr>
                    <tr>
                        <th>co2_gas_carbonator2</th>
                        <td>{{ $taxation->co2_gas_carbonator2 }}</td>
                    </tr>
                    <tr>
                        <th>first_filtrat_tank</th>
                        <td>{{ $taxation->first_filtrat_tank }}</td>
                    </tr>
                    <tr>
                        <th>sweet_water_tank</th>
                        <td>{{ $taxation->sweet_water_tank }}</td>
                    </tr>
                    <tr>
                        <th>clear_liquor_tank1</th>
                        <td>{{ $taxation->clear_liquor_tank1 }}</td>
                    </tr>
                    <tr>
                        <th>clear_liquor_tank2</th>
                        <td>{{ $taxation->clear_liquor_tank2 }}</td>
                    </tr>
                    <tr>
                        <th>carbonated_liquor_tank1</th>
                        <td>{{ $taxation->carbonated_liquor_tank1 }}</td>
                    </tr>
                    <tr>
                        <th>carbonated_liquor_tank2</th>
                        <td>{{ $taxation->carbonated_liquor_tank2 }}</td>
                    </tr>
                    <tr>
                        <th>raw_liquor_tank1</th>
                        <td>{{ $taxation->raw_liquor_tank1 }}</td>
                    </tr>
                    <tr>
                        <th>raw_liquor_tank2</th>
                        <td>{{ $taxation->raw_liquor_tank2 }}</td>
                    </tr>
                    <tr>
                        <th>clarifier_melt_tank1</th>
                        <td>{{ $taxation->clarifier_melt_tank1 }}</td>
                    </tr>
                    <tr>
                        <th>clarifier_melt_tank1</th>
                        <td>{{ $taxation->clarifier_melt_tank1 }}</td>
                    </tr>
                    <tr>
                        <th>filtered_melt_tank2</th>
                        <td>{{ $taxation->filtered_melt_tank2 }}</td>
                    </tr>
                    <tr>
                        <th>filtered_melt_tank2</th>
                        <td>{{ $taxation->filtered_melt_tank2 }}</td>
                    </tr>
                    <tr>
                        <th>back_wash_tank1</th>
                        <td>{{ $taxation->back_wash_tank1 }}</td>
                    </tr>
                    <tr>
                        <th>back_wash_tank2</th>
                        <td>{{ $taxation->back_wash_tank2 }}</td>
                    </tr>
                    @endforeach
                </thead>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
@endsection

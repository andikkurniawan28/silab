<div class="modal fade" id="create" tabindex="-1" method="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah {{ ucfirst('taksasi') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('taxations.store') }}" class="text-dark">
                @csrf
                @method('POST')

                <input type="hidden" name="opr" value="{{ session('name') }}">
                <input type="hidden" name="role_id" value="{{ session('role') }}">

                @include('components.input2',[
                    'label' => 'peti_nira_mentah',
                    'name' => 'peti_nira_mentah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pemanas_nira_mentah',
                    'name' => 'pemanas_nira_mentah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'reaction_tank',
                    'name' => 'reaction_tank',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'defekator',
                    'name' => 'defekator',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clarifier_st',
                    'name' => 'clarifier_st',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pemanas_nira_encer',
                    'name' => 'pemanas_nira_encer',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap1',
                    'name' => 'evap1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap2',
                    'name' => 'evap2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap3',
                    'name' => 'evap3',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap4',
                    'name' => 'evap4',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap5',
                    'name' => 'evap5',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap6',
                    'name' => 'evap6',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap7',
                    'name' => 'evap7',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap8',
                    'name' => 'evap8',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'evap9',
                    'name' => 'evap9',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'nk_sebelum_sulfitasi',
                    'name' => 'nk_sebelum_sulfitasi',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'nk_sulfitasi_atas',
                    'name' => 'nk_sulfitasi_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'nk_sulfitasi_bawah',
                    'name' => 'nk_sulfitasi_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'klare_shs_atas',
                    'name' => 'klare_shs_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'klare_shs_bawah',
                    'name' => 'klare_shs_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan1',
                    'name' => 'pan1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan2',
                    'name' => 'pan2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan3',
                    'name' => 'pan3',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan4',
                    'name' => 'pan4',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan5',
                    'name' => 'pan5',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan6',
                    'name' => 'pan6',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan7',
                    'name' => 'pan7',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan8',
                    'name' => 'pan8',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan9',
                    'name' => 'pan9',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan10',
                    'name' => 'pan10',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan11',
                    'name' => 'pan11',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan12',
                    'name' => 'pan12',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan13',
                    'name' => 'pan13',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pan14',
                    'name' => 'pan14',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung1',
                    'name' => 'palung1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung2',
                    'name' => 'palung2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung3',
                    'name' => 'palung3',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung4',
                    'name' => 'palung4',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung5',
                    'name' => 'palung5',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung6',
                    'name' => 'palung6',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung7',
                    'name' => 'palung7',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung8',
                    'name' => 'palung8',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung9',
                    'name' => 'palung9',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung10',
                    'name' => 'palung10',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'dist_mixer_a_utara',
                    'name' => 'dist_mixer_a_utara',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'dist_mixer_a_selatan',
                    'name' => 'dist_mixer_a_selatan',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'cvp_c',
                    'name' => 'cvp_c',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung_cvp_c',
                    'name' => 'palung_cvp_c',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'dist_mixer_c_timur',
                    'name' => 'dist_mixer_c_timur',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'dist_mixer_c_barat',
                    'name' => 'dist_mixer_c_barat',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'cvp_d',
                    'name' => 'cvp_d',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'palung_cvp_d',
                    'name' => 'palung_cvp_d',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'vertical_timur',
                    'name' => 'vertical_timur',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'vertical_barat',
                    'name' => 'vertical_barat',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'dist_mixer_d1',
                    'name' => 'dist_mixer_d1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'dist_mixer_d2',
                    'name' => 'dist_mixer_d2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'stroop_a_atas',
                    'name' => 'stroop_a_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'stroop_a_bawah',
                    'name' => 'stroop_a_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'stroop_c_atas',
                    'name' => 'stroop_c_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'stroop_c_bawah',
                    'name' => 'stroop_c_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'klare_d_atas',
                    'name' => 'klare_d_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'klare_d_bawah',
                    'name' => 'klare_d_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'klare_d_atas',
                    'name' => 'klare_d_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'einwuurf_c',
                    'name' => 'einwuurf_c',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'einwuurf_d',
                    'name' => 'einwuurf_d',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clear_liquor_1',
                    'name' => 'clear_liquor_1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clear_liquor_2',
                    'name' => 'clear_liquor_2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'remelt_a',
                    'name' => 'remelt_a',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'r1_mol_atas',
                    'name' => 'r1_mol_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'r2_mol_atas',
                    'name' => 'r2_mol_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'r1_mol_bawah',
                    'name' => 'r1_mol_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'r2_mol_bawah',
                    'name' => 'r2_mol_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'remelter_a1',
                    'name' => 'remelter_a1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'remelter_a2',
                    'name' => 'remelter_a2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'remelter_cd',
                    'name' => 'remelter_cd',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'mingler_atas',
                    'name' => 'mingler_atas',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'mingler_bawah',
                    'name' => 'mingler_bawah',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'silo_retail',
                    'name' => 'silo_retail',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'shs_silo',
                    'name' => 'shs_silo',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'pp',
                    'name' => 'pp',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'reaction_tank_drk',
                    'name' => 'reaction_tank_drk',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'talo_phospatasi',
                    'name' => 'talo_phospatasi',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'deep_bad_filter',
                    'name' => 'deep_bad_filter',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'co2_gas_carbonator1',
                    'name' => 'co2_gas_carbonator1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'co2_gas_carbonator2',
                    'name' => 'co2_gas_carbonator2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'first_filtrat_tank',
                    'name' => 'first_filtrat_tank',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'sweet_water_tank',
                    'name' => 'sweet_water_tank',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clear_liquor_tank1',
                    'name' => 'clear_liquor_tank1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clear_liquor_tank2',
                    'name' => 'clear_liquor_tank2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'carbonated_liquor_tank1',
                    'name' => 'carbonated_liquor_tank1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'carbonated_liquor_tank2',
                    'name' => 'carbonated_liquor_tank2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'raw_liquor_tank1',
                    'name' => 'raw_liquor_tank1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'raw_liquor_tank2',
                    'name' => 'raw_liquor_tank2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clarifier_melt_tank1',
                    'name' => 'clarifier_melt_tank1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'clarifier_melt_tank2',
                    'name' => 'clarifier_melt_tank2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'filtered_melt_tank1',
                    'name' => 'filtered_melt_tank1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'filtered_melt_tank2',
                    'name' => 'filtered_melt_tank2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'back_wash_tank1',
                    'name' => 'back_wash_tank1',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input2',[
                    'label' => 'back_wash_tank2',
                    'name' => 'back_wash_tank2',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save 
                    @include('components.icon', ['icon' => 'save'])
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
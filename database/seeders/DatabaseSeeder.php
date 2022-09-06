<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Around;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Sample;
use App\Models\Station;
use App\Models\Method;
use App\Models\Saccharomat;
use App\Models\Coloromat;
use App\Models\Moisture;
use App\Models\Sampling;
use App\Models\Umum;
use App\Models\Npp;
use App\Models\Baggase;
use App\Models\Tsai;
use App\Models\Calcium;
use App\Models\Boiler;
use App\Models\Chemical;
use App\Models\Preparation;
use App\Models\Fiber;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'password' => md5('admin'),
                'name' => 'Admin',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'qc',
                'password' => md5('qc'),
                'name' => 'QC',
                'role_id' => 2,
                'is_active' => 1,
            ],
            [
                'username' => 'pabrikasi',
                'password' => md5('pabrikasi'),
                'name' => 'Pabrikasi',
                'role_id' => 3,
                'is_active' => 1,
            ],
            [
                'username' => 'teknik',
                'password' => md5('teknik'),
                'name' => 'Teknik',
                'role_id' => 4,
                'is_active' => 1,
            ],
            [
                'username' => 'tuk',
                'password' => md5('tuk'),
                'name' => 'TUK',
                'role_id' => 4,
                'is_active' => 1,
            ],
            [
                'username' => 'core',
                'password' => md5('core'),
                'name' => 'Core Sample',
                'role_id' => 5,
                'is_active' => 1,
            ],
        ];

        $roles = [
            ['name' => 'Admin'],
            ['name' => 'QC'],
            ['name' => 'Pabrikasi'],
            ['name' => 'User'],
        ];

        $samples = [
            ['name' => 'RS Kedatangan', 'station_id' => 1, 'method_id' => 1],
            ['name' => 'RS Silo', 'station_id' => 1, 'method_id' => 1],
            ['name' => 'Nira Gilingan 1', 'station_id' => 2, 'method_id' => 2],
            ['name' => 'Nira Gilingan 2', 'station_id' => 2, 'method_id' => 2],
            ['name' => 'Nira Gilingan 3', 'station_id' => 2, 'method_id' => 2],
            ['name' => 'Nira Gilingan 4', 'station_id' => 2, 'method_id' => 2],
            ['name' => 'Nira Gilingan 5', 'station_id' => 2, 'method_id' => 2],
            ['name' => 'Ampas Gilingan 1', 'station_id' => 2, 'method_id' => 3],
            ['name' => 'Ampas Gilingan 2', 'station_id' => 2, 'method_id' => 3],
            ['name' => 'Ampas Gilingan 3', 'station_id' => 2, 'method_id' => 3],
            ['name' => 'Ampas Gilingan 4', 'station_id' => 2, 'method_id' => 3],
            ['name' => 'Ampas Gilingan 5', 'station_id' => 2, 'method_id' => 3],
            ['name' => 'Tebu Cacah', 'station_id' => 2, 'method_id' => 12],
            ['name' => 'Nira Mentah', 'station_id' => 3, 'method_id' => 4],
            ['name' => 'NM Sulfitasi', 'station_id' => 3, 'method_id' => 4],
            ['name' => 'Nira Tapis', 'station_id' => 3, 'method_id' => 4],
            ['name' => 'Nira Encer', 'station_id' => 3, 'method_id' => 4],
            ['name' => 'Blotong RVF 1', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Blotong RVF 2', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Blotong RVF 3', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Blotong RVF 4', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Blotong RVF Timur', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Blotong RVF Barat', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Blotong RVF Truk', 'station_id' => 3, 'method_id' => 3],
            ['name' => 'Nira Kental', 'station_id' => 4, 'method_id' => 4],
            ['name' => 'NK Sulfitasi', 'station_id' => 4, 'method_id' => 4],
            ['name' => 'Pre-Evaporator 1', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Pre-Evaporator 2', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Evaporator 1', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Evaporator 2', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Evaporator 3', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Evaporator 4', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Evaporator 5', 'station_id' => 4, 'method_id' => 2],
            ['name' => 'Remelter In', 'station_id' => 5, 'method_id' => 4],
            ['name' => 'Reaction Tank', 'station_id' => 5, 'method_id' => 4],
            ['name' => 'Carbonated', 'station_id' => 5, 'method_id' => 4],
            ['name' => 'Clear Liquor', 'station_id' => 5, 'method_id' => 4],
            ['name' => 'Cake Head', 'station_id' => 5, 'method_id' => 7],
            ['name' => 'Cake Mid', 'station_id' => 5, 'method_id' => 7],
            ['name' => 'Cake End', 'station_id' => 5, 'method_id' => 7],
            ['name' => 'Masakan A', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Masakan A Raw', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Masakan C', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Masakan D', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Masakan R1', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Masakan R2', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Masakan R3', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'CVP C', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'CVP D', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Einwuurf C', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Einwuurf D', 'station_id' => 6, 'method_id' => 5],
            ['name' => 'Sogokan C', 'station_id' => 6, 'method_id' => 2],
            ['name' => 'Sogokan D', 'station_id' => 6, 'method_id' => 2],
            ['name' => 'Klare SHS', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Klare D', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Stroop A', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Stroop C', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'R1 Mol', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'R2 Mol', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Remelter A', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Remelter CD', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Tetes Puteran', 'station_id' => 7, 'method_id' => 5],
            ['name' => 'Magma RS', 'station_id' => 8, 'method_id' => 5],
            ['name' => 'Gula SHS', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula A', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula R1', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula R2', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula R3', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula A Raw', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula C', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula D1', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Gula D2', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Kristal RS', 'station_id' => 8, 'method_id' => 1],
            ['name' => 'Tetes Tangki 1', 'station_id' => 9, 'method_id' => 6],
            ['name' => 'Tetes Tangki 2', 'station_id' => 9, 'method_id' => 6],
            ['name' => 'Tetes Tangki 3', 'station_id' => 9, 'method_id' => 6],
            ['name' => 'Tetes Tandon', 'station_id' => 9, 'method_id' => 6],
            ['name' => 'Tetes Kumpulan', 'station_id' => 9, 'method_id' => 6],
            ['name' => 'Jiangxin Jianglin', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'Yoshimine 1', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'Yoshimine 2', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'WTP', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'Daert JJ', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'Daert Yoshimine1', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'Daert Yoshimine2', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'HW', 'station_id' => 10, 'method_id' => 9],
            ['name' => 'Gula Produksi 50Kg', 'station_id' => 11, 'method_id' => 10],
            ['name' => 'Gula Produksi Retail', 'station_id' => 11, 'method_id' => 10],
            ['name' => 'Kapur PT Sedar', 'station_id' => 3, 'method_id' => 11],
        ];

        $stations = [
            ['name' => 'Penerimaan'],
            ['name' => 'Gilingan'],
            ['name' => 'Pemurnian'],
            ['name' => 'Penguapan'],
            ['name' => 'DRK'],
            ['name' => 'Masakan'],
            ['name' => 'Stroop'],
            ['name' => 'Gula'],
            ['name' => 'Tangki'],
            ['name' => 'Ketel'],
            ['name' => 'Packer'],
        ];

        $methods = [
            ['description' => "Icumsa, Moisture, Brix, Pol, HK, SO2, BJB"],
            ['description' => "Brix, Pol, Pol Baca, HK"],
            ['description' => "Pol Koreksi, Zat Kering, Air"],
            ['description' => "Brix, Pol, Pol Baca, HK, Icumsa, pH, CaO, Turbidity"],
            ['description' => "Brix, Pol, Pol Baca, HK, Icumsa"],
            ['description' => "Brix, TSAI"],
            ['description' => "Pol Baca, Moisture"],
            ['description' => "Pol Baca, Air"],
            ['description' => "TDS, pH, Kesadahan, Phospat"],
            ['description' => "Icumsa, Moisture"],
            ['description' => "Kadar Kapur"],
            ['description' => "Preparation Index, Kadar Sabut"],
        ];
        
        for($i = 0; $i <= count($samples); $i++)
        {
            $samplings[$i] = [
                'sample_id' => $i+1,
                'volume' => 300 + $i,
            ];

            $saccharomats[$i] = [
                'sampling_id' => $i,
                'pol' => 88,
                'percent_brix' => 99,
                'percent_pol' => 98,
                'purity' => (98/99*100),
            ];

            $coloromats[$i] = [
                'sampling_id' => $i,
                'icumsa' => 1000 + $i,
            ];
            
            $moistures[$i] = [
                'sampling_id' => $i,
                'moisture_content' => '0.0'.$i,
            ];
            
            $umums[$i] = [
                'sampling_id' => $i,
                'cao' => $i,
                'pH' => $i,
                'turbidity' => $i,
            ];
            
            $npps[$i] = [
                'pol' => 97,
                'percent_pol' => 98,
                'percent_brix' => 99,
                'purity' => (98/99*100),
                'yield' => (98/99*100),
            ];
            
            $baggases[$i] = [
                'sampling_id' => $i,
                'corrected_pol' => $i,
                'dry' => $i,
                'water' => $i,
            ];
            
            $tsais[$i] = [
                'sampling_id' => $i,
                'tsai' => 30 + $i,
            ];
            
            $calciums[$i] = [
                'sampling_id' => $i,
                'calcium' => 90,
            ];

            $boilers[$i] = [
                'sampling_id' => $i,
                'tds' => $i,
                'pH' => $i,
                'hardness' => $i,
                'phospate' => $i,
            ];

            $fibers[$i] = [
                'sampling_id' => $i,
                'fiber' => 30,
            ];

            $preparations[$i] = [
                'sampling_id' => $i,
                'pi' => 97,
            ];
        }

        $chemicals = [
            'kapur' => 1,
            'belerang' => 2,
            'floc' => 3,
            'naoh' => 4,
            'b894' => 5,
            'b895' => 6,
            'b210' => 7,
            'asam_phospat' => 8,
            'blotong' => 9,
        ];

        $arounds = [
            'tek_pe1' => 1,
            'tek_pe2' => 1,
            'tek_evap1' => 1,
            'tek_evap2' => 1,
            'tek_evap3' => 1,
            'tek_evap4' => 1,
            'tek_evap5' => 1,
            'tek_evap6' => 1,
            'tek_evap7' => 1,
            'tek_pan1' => 1,
            'tek_pan2' => 1,
            'tek_pan3' => 1,
            'tek_pan4' => 1,
            'tek_pan5' => 1,
            'tek_pan6' => 1,
            'tek_pan7' => 1,
            'tek_pan8' => 1,
            'tek_pan9' => 1,
            'tek_pan10' => 1,
            'tek_pan11' => 1,
            'tek_pan12' => 1,
            'tek_pan13' => 1,
            'tek_pan14' => 1,
            'tek_vakum' => 1,
            'suhu_pe1' => 1,
            'suhu_pe2' => 1,
            'suhu_evap1' => 1,
            'suhu_evap2' => 1,
            'suhu_evap3' => 1,
            'suhu_evap4' => 1,
            'suhu_evap5' => 1,
            'suhu_evap6' => 1,
            'suhu_evap7' => 1,
            'suhu_heater1' => 1,
            'suhu_heater2' => 1,
            'suhu_heater3' => 1,
            'suhu_air_injeksi' => 1,
            'suhu_air_terjun' => 1,
            'uap_baru' => 1,
            'uap_bekas' => 1,
            'uap_3ato' => 1,
        ];

        User::insert($users);
        Role::insert($roles);
        Sample::insert($samples);
        Station::insert($stations);
        Method::insert($methods);
        Sampling::insert($samplings);
        Saccharomat::insert($saccharomats);
        Coloromat::insert($coloromats);
        Moisture::insert($moistures);
        Umum::insert($umums);
        Npp::insert($npps);
        Baggase::insert($baggases);
        Tsai::insert($tsais);
        Calcium::insert($calciums);
        Boiler::insert($boilers);
        Chemical::insert($chemicals);
        Around::insert($arounds);
        Fiber::insert($fibers);
        Preparation::insert($preparations);
    }
}

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
use App\Models\Factor;
use App\Models\Register;
use App\Models\Post;
use App\Models\Program;

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
                'username' => 'tri',
                'password' => md5('tri'),
                'name' => 'Tri Hardjanto',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'tofan',
                'password' => md5('tofan'),
                'name' => 'Tofan Andrew Irawan',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'ari',
                'password' => md5('ari'),
                'name' => 'Ari Rahman Hakim',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'yudi',
                'password' => md5('yudi'),
                'name' => 'Yudi Suyadi',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'tutus',
                'password' => md5('tutus'),
                'name' => 'Tutus Agustyn R',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'dwi',
                'password' => md5('dwi'),
                'name' => 'Dwi Wahyu Nugroho',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'muslimin',
                'password' => md5('muslimin'),
                'name' => 'Muslimin',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'nico',
                'password' => md5('nico'),
                'name' => 'Nico Aldy',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'awal',
                'password' => md5('awal'),
                'name' => 'Awaludin Rauf',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'satria',
                'password' => md5('satria'),
                'name' => 'Satria Adi Wicaksono',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'andik',
                'password' => md5('andik'),
                'name' => 'Andik Kurniawan',
                'role_id' => 1,
                'is_active' => 1,
            ],
            [
                'username' => 'dita',
                'password' => md5('dita'),
                'name' => 'Dita Putri Pertiwi',
                'role_id' => 2,
                'is_active' => 1,
            ],
            [
                'username' => 'zainul',
                'password' => md5('zainul'),
                'name' => 'Zainul Arifin',
                'role_id' => 2,
                'is_active' => 1,
            ],
            [
                'username' => 'hafith',
                'password' => md5('hafith'),
                'name' => 'M. Nur Hafith',
                'role_id' => 2,
                'is_active' => 1,
            ],
            [
                'username' => 'liga',
                'password' => md5('liga'),
                'name' => 'Liga Andrean',
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
                'username' => 'bambang',
                'password' => md5('bambang'),
                'name' => 'Bambang Sutedjo',
                'role_id' => 5,
                'is_active' => 1,
            ],
            [
                'username' => 'muslimin2',
                'password' => md5('muslimin2'),
                'name' => 'Muslimin',
                'role_id' => 5,
                'is_active' => 1,
            ],
            [
                'username' => 'wahyu',
                'password' => md5('wahyu'),
                'name' => 'Wahyu Santoso',
                'role_id' => 5,
                'is_active' => 1,
            ],
        ];

        $roles = [
            ['name' => 'Admin'],
            ['name' => 'QC'],
            ['name' => 'Pabrikasi'],
            ['name' => 'User'],
            ['name' => 'Mandor'],
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
            ['name' => 'Magma RS', 'station_id' => 7, 'method_id' => 5],
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

        $factors = [
            [
                'description' => 'Flow Nira Mentah',
                'operation' => '*',
                'value' => 0.85,
            ],
            [
                'description' => 'Flow Imbibisi',
                'operation' => '*',
                'value' => 1,
            ],
            [
                'description' => 'Faktor Saccharomat',
                'operation' => '+ (faktor*brix)',
                'value' => 0.03,
            ],
        ];

        $registers = [
            [ 'code' => 1, 'region' => 'Gondanglegi', ],
            [ 'code' => 2, 'region' => 'Pagelaran', ],
            [ 'code' => 3, 'region' => 'Dampit', ],
            [ 'code' => 4, 'region' => 'Bantur', ],
            [ 'code' => 5, 'region' => 'Donomulyo', ],
            [ 'code' => 'A', 'region' => 'Lawang', ],
            [ 'code' => 'B', 'region' => 'Dengkol', ],
            [ 'code' => 'C', 'region' => 'Karangploso', ],
            [ 'code' => 'D', 'region' => 'Jabung', ],
            [ 'code' => 'E', 'region' => 'Pakis', ],
            [ 'code' => 'F', 'region' => 'Tumpang Agung', ],
            [ 'code' => 'G', 'region' => 'Poncokusumo', ],
            [ 'code' => 'H', 'region' => 'Wagir', ],
            [ 'code' => 'I', 'region' => 'Tajinan', ],
            [ 'code' => 'J', 'region' => 'Bululawang', ],
            [ 'code' => 'K', 'region' => 'Pakisaji', ],
            [ 'code' => 'L', 'region' => 'Kromengan', ],
            [ 'code' => 'M', 'region' => 'Wonosari', ],
            [ 'code' => 'N', 'region' => 'Sumberpucung', ],
            [ 'code' => 'O', 'region' => 'Ngajum', ],
            [ 'code' => 'P', 'region' => 'Pagak', ],
            [ 'code' => 'Q', 'region' => 'Kalipare', ],
            [ 'code' => 'R', 'region' => 'Sri Sedono', ],
            [ 'code' => 'S', 'region' => 'Rekanan Utara', ],
            [ 'code' => 'T', 'region' => 'Kesamben', ],
            [ 'code' => 'U', 'region' => 'Kedungkandang', ],
            [ 'code' => 'V', 'region' => 'Kepanjen', ],
            [ 'code' => 'W', 'region' => 'Sari Madu', ],
            [ 'code' => 'X', 'region' => 'Rekanan Selatan Timur', ],
            [ 'code' => 'Y', 'region' => 'Rekanan Selatan Barat', ],
            [ 'code' => 'Z', 'region' => 'Tumpang Padita', ],
        ];

        $posts = [
            ['code' => 'O', 'region' => 'Banyuglugur'],
            ['code' => 'P', 'region' => 'Tongas'],
            ['code' => 'R', 'region' => 'Purwosari'],
            ['code' => 'S', 'region' => 'Ngoro'],
            ['code' => 'T', 'region' => 'Selorejo'],
            ['code' => 'U', 'region' => 'Garum'],
            ['code' => 'V', 'region' => 'Gumitir'],
            ['code' => 'Y', 'region' => 'Pagak'],
            ['code' => 'X', 'region' => 'Peteng'],
            ['code' => '6', 'region' => 'Ngajum'],
        ];

        $programs = [
            ['code' => 'A', 'name' => 'Banyuwangi'],
            ['code' => 'B', 'name' => 'Jember'],
            ['code' => 'C', 'name' => 'Situbondo'],
            ['code' => 'D', 'name' => 'Bondowoso'],
            ['code' => 'E', 'name' => 'Probolinggo'],
            ['code' => 'F', 'name' => 'Lumajang'],
            ['code' => 'G', 'name' => 'Pasuruan'],
            ['code' => 'H', 'name' => 'Mojokerto'],
            ['code' => 'I', 'name' => 'Jombang'],
            ['code' => 'J', 'name' => 'Blitar'],
            ['code' => 'K', 'name' => 'Kredit DW TR'],
            ['code' => 'L', 'name' => 'Kediri'],
            ['code' => 'M', 'name' => 'Tulungagung'],
            ['code' => 'N', 'name' => 'Non Kredit DW'],
            ['code' => 'Z', 'name' => 'SPT'],
            ['code' => 'P', 'name' => 'Kebun Benih Datar'],
            ['code' => 'Q', 'name' => 'Kebun Benih Induk'],
            ['code' => 'R', 'name' => 'Kebun Benih Nenek'],
            ['code' => 'S', 'name' => 'Kebun Benih Pokok'],
            ['code' => 'T', 'name' => 'Kebun Persilangan P3GI'],
            ['code' => 'U', 'name' => 'Kebun Percobaan'],
            ['code' => 'V', 'name' => 'Kebun Pengenalan Jenis'],
            ['code' => 'X', 'name' => 'Tebu Giling TS'],
        ];

        User::insert($users);
        Role::insert($roles);
        Sample::insert($samples);
        Station::insert($stations);
        Method::insert($methods);
        Factor::insert($factors);
        Register::insert($registers);
        Post::insert($posts);
        Program::insert($programs);
        // Sampling::insert($samplings);
        // Saccharomat::insert($saccharomats);
        // Coloromat::insert($coloromats);
        // Moisture::insert($moistures);
        // Umum::insert($umums);
        // Npp::insert($npps);
        // Baggase::insert($baggases);
        // Tsai::insert($tsais);
        // Calcium::insert($calciums);
        // Boiler::insert($boilers);
        // Chemical::insert($chemicals);
        // Around::insert($arounds);
        // Fiber::insert($fibers);
        // Preparation::insert($preparations);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Sample;
use App\Models\Station;
use App\Models\Method;
use App\Models\Sampling;

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
        
        for($i = 0; $i < count($samples); $i++)
        {
            $samplings[$i] = ['sample_id' => $i+1];
        }

        User::insert($users);
        Role::insert($roles);
        Sample::insert($samples);
        Station::insert($stations);
        Method::insert($methods);
        Sampling::insert($samplings);
    }
}

<?php

namespace Database\Seeders;

use App\Models\MasterData\Materi;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // created data here
        $materi = [
            [
                'judul' => 'Pronoun',
                'kategori' => 'Fundamental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'judul' => 'Pronoun2',
                'kategori' => 'Fundamental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'judul' => 'Pronoun3',
                'kategori' => 'Fundamental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
         // this array $config_payment will be insert to table 'config_payment'
         Materi::insert($materi);
    }
}

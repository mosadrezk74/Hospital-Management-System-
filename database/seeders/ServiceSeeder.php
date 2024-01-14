<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => ' كشف استشاري  ', //user char 10
            'name_en' => 'MosadMosadMpsad',
            'price' => '910',
            'description' => 'mfd df dz fknd dk;f ndk;l df ;kndfdlfu df b dfkb dowuiefe ',
        ]);
    }
}

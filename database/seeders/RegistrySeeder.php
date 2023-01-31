<?php

namespace Database\Seeders;

use App\Models\Registry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registry::create([
            'id' => 1,
            'detail' => 'prueba',
            'amount' => 100,
            'registry_date' => '2023-01-30',
            'type_id' => 1
        ]);
    }
}

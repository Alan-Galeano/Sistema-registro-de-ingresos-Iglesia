<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'id' => 1,
            'name' => 'Diezmo'
        ]);
        Type::create([
            'id' => 2,
            'name' => 'Ofrenda'
        ]);
        Type::create([
            'id' => 3,
            'name' => 'Gasto'
        ]);
    }
}

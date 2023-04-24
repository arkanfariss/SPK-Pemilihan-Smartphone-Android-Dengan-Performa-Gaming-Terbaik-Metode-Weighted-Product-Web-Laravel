<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        Data::create([
            'smartphone' => 'A1',
            'cpu' => '2',
            'ram' => '8',
            'storage' => '128',
            'layar' => '6.4',
            'baterai' => '5000',
            'harga' => '2798000',
        ]);

        Data::create([
            'smartphone' => 'A2',
            'cpu' => '2.4',
            'ram' => '6',
            'storage' => '128',
            'layar' => '6.5',
            'baterai' => '5000',
            'harga' => '2679000',
        ]);

        Data::create([
            'smartphone' => 'A3',
            'cpu' => '2.35',
            'ram' => '4',
            'storage' => '64',
            'layar' => '6.22',
            'baterai' => '4230',
            'harga' => '1259000',
        ]);

        Data::create([
            'smartphone' => 'A4',
            'cpu' => '2',
            'ram' => '4',
            'storage' => '128',
            'layar' => '6.5',
            'baterai' => '5000',
            'harga' => '3599000',
        ]);

        Data::create([
            'smartphone' => 'A5',
            'cpu' => '2.4',
            'ram' => '8',
            'storage' => '128',
            'layar' => '6.43',
            'baterai' => '4310',
            'harga' => '3200000',
        ]);
    }
}

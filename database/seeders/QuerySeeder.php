<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Query;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            $query = Query::create([
                'full_name' =>  $faker->name,
                'email' => $faker->email,
                'company_name' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'message' => $faker->paragraph
            ]);
        }

    }
}

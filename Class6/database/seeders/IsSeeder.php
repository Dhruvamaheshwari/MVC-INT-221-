<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// this is mandatory import
use Illuminate\Support\Facades\DB;

// this is mandatory import
use App\Models\IsModel;


class IsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IsModel::factory()->count(15)->create();
        /**
        for ($i = 1; $i <= 15; $i++) {
            DB::table('myseed')->insert(
                [
                    // this is for radome data
                    'name' => 'demo' . rand(100, 999),
                    'email' => 'client' . rand(100, 999) . '@gamil.com',
                ]
            );
        } 
         */


        /*
        [
                [
                    'name' => "dhruva maheshwari",
                    "email" => "dhruva@gmail.com",
                ],
                [
                    'name' => "aastha",
                    'email' => "aastha@gmail.com",
                ]
            ]
        */
    }
}

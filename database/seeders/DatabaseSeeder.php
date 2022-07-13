<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientCompanies;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        ClientCompanies::factory(10000)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cornellnote;
use App\Models\Bug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
        ->count(50)
        ->hasBugs(10)
        ->hasCornellnotes(5)
        ->create();
    }
}

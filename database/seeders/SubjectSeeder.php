<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Topic;
use App\Models\Bug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::factory()
        ->count(150)
        ->hasTopics(5)
        ->create();
    }
}

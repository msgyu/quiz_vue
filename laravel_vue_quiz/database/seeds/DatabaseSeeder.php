<?php

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
        $this->call(InformationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(QuizSeeder::class);
    }
}

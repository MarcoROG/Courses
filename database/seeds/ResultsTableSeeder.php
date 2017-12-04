<?php

use Illuminate\Database\Seeder;

final class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Result::class, 10)->create();
    }
}

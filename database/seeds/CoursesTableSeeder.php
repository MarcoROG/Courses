<?php

use Illuminate\Database\Seeder;

final class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Course::class, 10)->create();
    }
}

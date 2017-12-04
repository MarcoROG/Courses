<?php

use Illuminate\Database\Seeder;

final class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 5 random chapters related to a single course already created
        \App\Course::limit(5)->get()->each(function (\App\Course $course) {
            factory(\App\Chapter::class, 5)->create([
                "course_id" => $course->id,
            ]);
        });
        
        factory(\App\Course::class, 10)->create();
    }
}

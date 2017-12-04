<?php

use Illuminate\Database\Seeder;

final class ObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 5 random observations related to a single result already created
        \App\Result::limit(5)->get()->each(function (\App\Result $result) {
            factory(\App\Observation::class, 5)->create([
                "result_id" => $result->id,
            ]);
        });
    
        factory(\App\Result::class)->create();
    }
}

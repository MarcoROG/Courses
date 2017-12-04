<?php

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();
        
        $this->call(CoursesTableSeeder::class);
        $this->call(ChaptersTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(DefinitionsTableSeeder::class);
        $this->call(ObservationsTableSeeder::class);
        
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}

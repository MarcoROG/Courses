<?php

use Illuminate\Database\Seeder;

final class DefinitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Definition::class, 10)->create();
    }
}

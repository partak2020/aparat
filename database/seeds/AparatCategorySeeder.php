<?php

use Illuminate\Database\Seeder;

class AparatCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AparatCategory::class, 10)->create();
    }
}

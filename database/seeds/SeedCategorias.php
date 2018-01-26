<?php

use Illuminate\Database\Seeder;

class SeedCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Categoria::class,10)->create();
    }
}

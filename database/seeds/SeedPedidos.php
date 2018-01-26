<?php

use Illuminate\Database\Seeder;

class SeedPedidos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pedido::class,10)->create();
    }
}

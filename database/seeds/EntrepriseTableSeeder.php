<?php

use Illuminate\Database\Seeder;

class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Entreprise', 5)->create();
    }
}
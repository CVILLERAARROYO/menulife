<?php

use Illuminate\Database\Seeder;
use Kaker\Factory;
use App\renal;
class SedeerRenal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        for ($i=0; $i<10 ; $i++) {
        	renal::create([
        		'desayuno'=> $faker->lastname,
        		'almuerzo'=> $faker->lastname,
        		'cena'=> $faker->lastname
        	]);
        }
    }
}
?>
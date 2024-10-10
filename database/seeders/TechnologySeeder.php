<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['TECH_1', 'TECH_2', 'TECH_3', 'TECH_4', 'TECH_5'];

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->name = $technology;
            $new_technology->slug = Technology::generateSlug($technology);
            $new_technology->description = $faker->text(500);
            $new_technology->save();
        }
    }
}

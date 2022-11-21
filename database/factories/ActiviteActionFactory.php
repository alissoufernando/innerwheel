<?php

namespace Database\Factories;

use App\Models\ActiviteAction;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteActionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "DOSSOU Jeanne",
            'description' => "Seeding, also commonly known as database seeding is the process of generating mock data into your application database.",
            'contenu' => "Seeding, also commonly known as database seeding is the process of generating mock data into your application database.",
            'image' => "1.jpg,1.jpg,1.jpg,1.jpg,1.jpg,1.jpg,1.jpg,1.jpg,1.jpg,1.jpg,",
        ];
    }
}

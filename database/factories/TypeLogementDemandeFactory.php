<?php

namespace Database\Factories;

use App\Models\Demande;
use App\Models\Localite;
use App\Models\TypeLogement;
use App\Models\TypeLogementDemande;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeLogementDemandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeLogementDemande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_logement_id' =>  TypeLogement::inRandomOrder()->first()->id,
            'demande_id' => Demande::inRandomOrder()->first()->id,
            'localite_id' => Localite::inRandomOrder()->first()->id,
        ];
    }
}

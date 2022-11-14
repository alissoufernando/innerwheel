<?php

namespace Database\Factories;

use App\Models\Demande;
use App\Models\Demandeur;
use App\Models\ModePaiement;
use App\Models\SourcePaiement;
use App\Models\StatutDemande;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'date_prise_charge' => $this->faker->date('Y-m-d'),
            'date_traitee' => $this->faker->date('Y-m-d'),
            'mode_paiement_id' => ModePaiement::inRandomOrder()->first()->id,
            'source_paiement_id' => SourcePaiement::inRandomOrder()->first()->id,
            'demandeur_id' => Demandeur::inRandomOrder()->first()->id,
            'statut_demande_id' => StatutDemande::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,

        ];
    }
}

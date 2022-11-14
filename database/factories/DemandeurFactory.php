<?php

namespace Database\Factories;

use App\Models\CategorieProfessionnelle;
use App\Models\Civilite;
use App\Models\Demandeur;
use App\Models\Departement;
use App\Models\Genre;
use App\Models\Localite;
use App\Models\Pays;
use App\Models\Profession;
use App\Models\SituationMatrimoniale;
use App\Models\TypeLogement;
use App\Models\TypePiece;
use App\Models\Ville;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demandeur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profession_id' => Profession::inRandomOrder()->first()->id,
            'IDpays_nationalite' => Pays::inRandomOrder()->first()->id,
            'IDpays_delivrance' => Pays::inRandomOrder()->first()->id,
            'IDpays_residance' => Pays::inRandomOrder()->first()->id,
            'IDdepartement_residence' => Departement::inRandomOrder()->first()->id,
            'type_piece_id' => TypePiece::inRandomOrder()->first()->id,
            'type_logement_id' => TypeLogement::inRandomOrder()->first()->id,
            'categorie_pro' => CategorieProfessionnelle::inRandomOrder()->first()->id,
            'localite_id' => Localite::inRandomOrder()->first()->id,
            'genre_id' => Genre::inRandomOrder()->first()->id,
            'situation_matrimoniale_id' => SituationMatrimoniale::inRandomOrder()->first()->id,
            'ville_id' => Ville::inRandomOrder()->first()->id,
            'civilite_id' => Civilite::inRandomOrder()->first()->id,
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'date_de_naissance' => $this->faker->date('Y-m-d'),
            'detail_profession' => $this->faker->paragraph(),
            'Numero_piece' => $this->faker->phoneNumber(),
            'Date_delivrance_piece' => $this->faker->date('Y-m-d'),
            'Date_expiration_piece' => $this->faker->date('Y-m-d'),
            'Adresse_line1' => $this->faker->address(),
            'Adresse_line2' => $this->faker->address(),
            'Contacts' => $this->faker->phoneNumber(),
            'Emails' => $this->faker->unique()->safeEmail(),
            'nombre_annee_effectue' => $this->faker->date('Y'),
            'nombre_annee_restant' => $this->faker->date('Y'),
            //'email_verified_at' => now(),
            //'password' => Hash::make('password'),
            //'remember_token' => Str::random(10),
        ];
    }
}

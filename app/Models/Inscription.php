<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tarif;
use App\Models\Statut;
use App\Models\Activite;
use App\Models\Individu;
use App\Models\ModeArrivee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscription extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function modeArrivee ()
    {
        return $this->belongsTo(ModeArrivee::class, 'mode_arrivee_id');
    }

    public function statut ()
    {
        return $this->belongsTo(Statut::class, 'statut_id');
    }

    public function tarif ()
    {
        return $this->belongsTo(Tarif::class, 'tarif_id');
    }

    public function individus ()
    {
        return $this->belongsTo(Individu::class, 'individu_id');
    }

    public function activites()
    {
        return $this->belongsToMany(Activite::class);
    }

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }

}

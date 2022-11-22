<?php

namespace App\Models;

use App\Models\Statut;
use App\Models\Echange;
use App\Models\Inscription;
use App\Models\ModePaiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function inscription ()
    {
        return $this->belongsTo(Inscription::class);
    }
    public function statut ()
    {
        return $this->belongsTo(Statut::class,);
    }
    public function modePaiement ()
    {
        return $this->belongsTo(ModePaiement::class,);
    }
    public function echange ()
    {
        return $this->belongsTo(Echange::class,);
    }
}

<?php

namespace App\Models;

use App\Models\Paiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Echange extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function paiement ()
    {
        return $this->belongsTo(Paiement::class,);
    }
}

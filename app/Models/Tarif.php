<?php

namespace App\Models;

use App\Models\Hebergement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarif extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function hebergement ()
    {
        return $this->belongsTo(Hebergement::class,);
    }

}

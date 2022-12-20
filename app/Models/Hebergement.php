<?php

namespace App\Models;

use App\Models\Tarif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hebergement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function edition ()
    {
        return $this->belongsTo(Edition::class,);
    }

    public function tarifs()
    {
        return $this->belongsTo(Tarif::class,);
    }

}

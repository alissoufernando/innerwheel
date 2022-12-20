<?php

namespace App\Models;

use App\Models\Tarif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OptionHebergement extends Model
{
    use HasFactory;
    // protected $table = 'option_hebergements';
    protected $guarded = [];
    public function tarifs()
    {
        return $this->belongsTo(Tarif::class,'tarif_id');
    }
}

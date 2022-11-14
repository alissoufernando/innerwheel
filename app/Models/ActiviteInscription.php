<?php

namespace App\Models;

use App\Models\Edition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActiviteInscription extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function edition ()
    {
        return $this->belongsTo(Edition::class,);
    }

}

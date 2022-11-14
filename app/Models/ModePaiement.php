<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModePaiement extends Model
{
    use HasFactory;

    protected $table = 'mode_paiements';
    protected $guarded = [];
    public function inscription ()
    {
        return $this->belongsTo(Inscription::class);
    }

}

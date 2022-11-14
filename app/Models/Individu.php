<?php

namespace App\Models;

use App\Models\Club;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Individu extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function club ()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }
}

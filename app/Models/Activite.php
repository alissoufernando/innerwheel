<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function inscriptions()
    {
        return $this->belongsToMany(Inscription::class);
    }
}

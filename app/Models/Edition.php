<?php

namespace App\Models;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Edition extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function activites ()
    {
        return $this->hasMany(Activite::class);
    }
}

<?php

namespace App\Models;

use App\Models\Club;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pays extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "pays";
    public function club ()
    {
        return $this->belongsTo(Club::class,);
    }


}

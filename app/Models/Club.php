<?php

namespace App\Models;

use App\Models\Pays;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Club extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pay ()
    {
        return $this->belongsTo(Pays::class, 'pay_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arole extends Model
{
    use HasFactory;

    public function ausers()
    {
        return $this->belongsToMany(Auser::class);
    }
}

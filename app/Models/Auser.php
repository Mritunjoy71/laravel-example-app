<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auser extends Model
{
    use HasFactory;
    public function aroles()
    {
        return $this->belongsToMany(Arole::class);
    }
}

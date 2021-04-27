<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $table ='attachments';
    protected $fillable=['path'];

    protected $casts = [
        'column_name' =>'json',
    ];
}

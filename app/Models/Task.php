<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Task extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email_id','phone_no','image'];
    protected $hidden = ['created_at','updated_at'];
}
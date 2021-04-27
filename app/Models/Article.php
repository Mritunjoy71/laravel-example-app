<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Encore\Admin\Grid;


class Article extends Model
{
    use HasFactory;
    protected $casts = [
        'title' =>'json',
        'details'=>'json',
    ];
    
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    // public function getColumnNameAttribute($value)
    // {
    //     return array_values(json_decode($value, true) ?: []);
    // }

    // public function setColumnNameAttribute($value)
    // {
    //     $this->attributes['column_name'] = json_encode(array_values($value));
    // }
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}

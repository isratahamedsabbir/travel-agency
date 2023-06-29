<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umrah extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'thumb',
        'bg_img',
        'description'
    ];
}

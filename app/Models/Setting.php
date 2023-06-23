<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
	protected $fillable = [
        'first_name',
        'last_name',
        'icon',
        'title',
        'author',
        'keywords',
        'description',
        'email',
        'mobile',
        'address',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube'
    ];
}

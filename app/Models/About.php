<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
	protected $fillable = [
        'main_img',
        'title',
        'description',
        'left_img',
        'right_img',
        'one_name',
        'one_icon',
        'one_title',
        'two_name',
        'two_icon',
        'two_title',
        'three_name',
        'three_icon',
        'three_title'
    ];
}

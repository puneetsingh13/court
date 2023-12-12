<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timelineImages extends Model
{
    use HasFactory;

    public $table = 'timeline_images';


    protected $fillable = [
        'timeline_id',
        'images',
        'image_description'
    ];

    protected $casts = [
        'images' => 'array'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timelineAttachemments extends Model
{
    use HasFactory;

    public $table = 'timeline_attachemments';


    protected $fillable = [
        'timeline_id',
        'attachement',
    ];

    protected $casts = [
        'attachement' => 'array'
    ];

}

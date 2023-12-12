<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    public $table = 'timeline';

    protected $fillable = [
        'date_timeline',
        'title',
        'description',
        'month_timeline',
        'year_timeline'
    ];

    public function images(){
        return $this->hasMany(timelineImages::class, 'timeline_id', 'id');
    }

    public function attachements() {
        return $this->hasMany(timelineAttachemments::class, 'timeline_id', 'id');
    }
    
}

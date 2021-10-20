<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancy extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'employer', 'published', 'location', 'updated', 'deadline','img', 'text'];
    protected $casts = [
        'day' => 'date'
    ];
}

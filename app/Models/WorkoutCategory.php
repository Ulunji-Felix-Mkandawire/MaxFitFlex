<?php

namespace App\Models;

use Database\Factories\WorkoutCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutCategory extends Model
{
    /** @use HasFactory<WorkoutCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}

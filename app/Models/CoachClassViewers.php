<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachClassViewers extends Model
{
    use HasFactory;
    protected $table = 'coach_class_viewers';
    protected $fillable = [
        'coach_class_id',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id' => 'integer',
        'coach_class_id' => 'integer',
        'user_id' => 'integer'
    ];
}

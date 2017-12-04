<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Course extends Model
{
    use SoftDeletes;
    
    const TABLE = 'courses';
    
    protected $table = self::TABLE;
    
    protected $fillable = ['name', 'semester'];
    
    protected $guarded = ['id'];
    
    protected $casts = [
        'semester' => 'boolean',
    ];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    
    /**
     * A Course may have multiple chapters
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chapters() : HasMany
    {
        return $this->hasMany(Chapter::class);
    }
    
}

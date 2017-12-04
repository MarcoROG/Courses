<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Definition extends Model
{
    use SoftDeletes;
    
    const TABLE = 'definitions';
    
    protected $table = self::TABLE;
    
    protected $fillable = ['name', 'content'];
    
    protected $guarded = ['id'];

    /**
     * The results concerning the definition.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function results() : BelongsToMany
    {
        return $this->belongsToMany(Result::class);
    }

    /**
     * The chapters featuring the definition.
     */
    public function chapters()
    {
        return $this->morphToMany(Chapter::class, 'content');
    }
}

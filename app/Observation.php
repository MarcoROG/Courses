<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Observation extends Model
{
    use SoftDeletes;
    
    const TABLE = 'observations';
    
    protected $table = self::TABLE;
    
    protected $fillable = ['title', 'content', 'result_id'];
    
    protected $guarded = ['id'];
    
    protected $casts = [
        'result_id' => 'integer',
    ];
    
    /**
     * An observation is related to a result
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function result() : BelongsTo
    {
        return $this->belongsTo(Result::class);
    }

    /**
     * The chapters featuring the observation.
     */
    public function chapters()
    {
        return $this->morphToMany(Chapter::class, 'content');
    }
}

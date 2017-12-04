<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Chapter extends Model
{
    use SoftDeletes;
    
    const TABLE = 'chapters';
    
    protected $table = self::TABLE;
    
    protected $fillable = ['name', 'course_id'];
    
    protected $guarded = ['id'];
    
    protected $casts = [
        'course_id' => 'integer',
    ];
    
    /**
     * One chapter may be related to a course.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course() : BelongsTo
    {
        return $this->belongsTo(Course::class)->withDefault();
    }

    /**
     * The lecture definitions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function definitions()
    {
        return $this->morphedByMany(Definition::class,'content');
    }

    /**
     * The lecture results.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function results()
    {
        return $this->morphedByMany(Result::class,'content');
    }

    /**
     * The lecture observations.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function observations()
    {
        return $this->morphedByMany(Observation::class,'content');
    }

}

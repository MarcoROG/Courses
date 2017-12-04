<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Result extends Model
{
    use SoftDeletes;
    
    const TABLE = 'results';
    
    protected $table = self::TABLE;
    
    protected $fillable = ['name', 'hypothesis', 'thesis', 'outline', 'proof', 'type'];
    
    protected $guarded = ['id'];
    
    /**
     * A result may have multiple observations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function observations() : HasMany
    {
        return $this->hasMany(Observation::class);
    }
}

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
}

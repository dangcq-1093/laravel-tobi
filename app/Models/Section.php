<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'type',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    public function description()
    {
        return $this->morphOne(Description::class, 'descriptionable');
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}

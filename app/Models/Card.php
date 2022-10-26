<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'note', 'section_id', 'order',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function descriptions()
    {
        return $this->morphMany(Description::class, 'descriptionable');
    }
}

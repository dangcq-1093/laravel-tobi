<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'descriptionable_id', 'descriptionable_type', 'file_upload_id',
    ];

    public function descriptionable()
    {
        return $this->morphTo();
    }

    public function file()
    {
        return $this->hasOne(FileUpload::class);
    }
}

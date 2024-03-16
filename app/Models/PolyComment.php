<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PolyComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
    ];

//    public function customer(): MorphTo
//    {
//        return $this->morphTo('commentable');
//    }
//
//    public function tender(): MorphTo
//    {
//        return $this->morphTo('commentable');
//    }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

}

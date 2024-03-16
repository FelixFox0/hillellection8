<?php

namespace App\Models\Traits;

use App\Models\PolyComment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Comments
{
    public function polyComments(): MorphMany
    {
        return $this->morphMany(PolyComment::class, 'commentable');
    }

}

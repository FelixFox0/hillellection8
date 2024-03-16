<?php

namespace App\Models;

use App\Models\Traits\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Tender extends Model
{
    use HasFactory;
    use Comments;

    public $timestamps = false;

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class, 'applications');
    }




}

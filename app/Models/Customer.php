<?php

namespace App\Models;

use App\Models\Traits\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Customer extends Model
{
    use HasFactory;
    use Comments;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'string';

//    public $timestamps = false;
    protected $dateFormat = 'Y-m-d';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'name',
        'user_name',
    ];

    protected $guarded = [];

    protected $hidden = [];


//    public function applicatios(): HasMany
//    {
//        return $this->hasMany(Application::class);
//    }
//
//    public function customers(): BelongsToMany
//    {
//        return $this->belongsToMany(Customer::class, 'application');
//    }

}

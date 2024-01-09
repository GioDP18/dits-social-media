<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;

    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
        'id',
        'users_id',
        'caption',
        'image'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }

}

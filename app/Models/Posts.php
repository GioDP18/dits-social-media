<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'users_id',
        'caption',
        'created_at'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Likes::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function postImages(){
        return $this->hasMany(PostImages::class);
    }

}

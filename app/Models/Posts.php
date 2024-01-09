<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'users_id',
        'caption',
        'image',
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
}

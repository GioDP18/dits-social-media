<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'posts_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}

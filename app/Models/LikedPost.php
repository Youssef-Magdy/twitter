<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedPost extends Model
{
    use HasFactory;

    protected $table = "liked_posts";

    protected $fillable = [
        'like'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class,"user_id","id");
    }
}

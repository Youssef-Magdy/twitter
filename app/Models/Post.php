<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'body'
    ];

    public function comments()
    {
        return $this->hasMany(comment::class,"parent_id","id");
    }
}

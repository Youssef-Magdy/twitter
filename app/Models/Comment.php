<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'body'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class,'parent_id','id');
    }

    public function replys()
    {
        return $this->hasMany(Reply::class,"base_id","parent_id");
    }
}

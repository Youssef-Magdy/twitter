<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'body'
    ];

    // public function comment()
    // {
    //     return $this->belongsTo(Comment::class,);
    // }
}

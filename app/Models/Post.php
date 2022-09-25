<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{
    use HasFactory;
  
    protected $fillable =[
        'title',
        'body',
        'parent_id',
        'user_id'
    ];

    /**
     * @param Builder $builder
     */


    public function scopeParent(
        Builder $builder
    ):void
    {
        $builder->whereNull('parent_id');
    }

    public function comments() : hasMany
    {
        return $this->hasMany(comment::class,"parent_id","id");
    }

    public function likes() : hasMany
    {
        return $this->hasOne(LikedPost::class);
    }
}

<?php

namespace App\Observers;

use App\Models\Post;

class PostObserve
{
    /**
     * Handle the Post "created" event.
     *
     * @param Post $post
     * @return void
     */
    public function created(Post $post){
        /**
         * creating a slug as default
         */
        $c = $post;
        
        if(!$post->base_id) {
            $post->base_id = $c->id;
        }

        $post->save();
    }
}

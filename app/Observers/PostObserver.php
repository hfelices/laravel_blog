<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
class PostObserver
{
    /**
     * Handle the Post "creating" event.
     */
    public function creating(Post $post): void
    {
        if(! \App::runningInConsole()){
            $post->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Post "deleting" event.
     */
    public function deleting(Post $post): void
    {
        if($post->image){
            Storage::delete(($post->image->url));
        }
    }


}

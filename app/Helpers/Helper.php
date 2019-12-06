<?php

use App\Models\Post;

if(!function_exists('latest_posts'))
{
    function latest_posts()
    {
        return Post::where([
                    ['is_active', 1],
                    ['category_id', 1]])
                    ->get();
    }
}

?>
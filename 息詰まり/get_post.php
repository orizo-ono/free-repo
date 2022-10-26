<!-- html組み込みVer. -->
<?php

// 2番目の投稿
class second_get_post
{
    public function get_post_func()
    {
        $second_new_post = get_posts(array(
            'numberposts' => 1,
            'offset' => 1,
        ));
        foreach ($second_new_post as $post) :
            setup_postdata($post);
        endforeach;
        wp_reset_postdata();
    }
}

$second_post = new second_get_post();
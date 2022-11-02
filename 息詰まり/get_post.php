<!-- html組み込みVer. -->
<?php

// 2番目の投稿クラス管理
class Second_get_post
{
    public $num;

    public function __construct($num) //メソッドを呼び出す時まっさきに呼び出されるやつのはず
    {
        $second_new_post = get_posts(array(
            'numberposts' => 1, // 取得件数をさしている。元々の値は1
            'offset' => $num, // 何番目から取得するのか。元々の値は1
        ));
        foreach ($second_new_post as $post) :
            setup_postdata($post);
        endforeach;
        wp_reset_postdata();
    }
}
$nth_post = new Second_get_post(); // こいつに引数を渡しn番目の投稿が表示されるよう簡単に再利用したい


////////////////////////////////////////////////////////////////////////////////////////////////////


function get_post($num)
{
    $second_new_post = get_posts(array(
        'numberposts' => 1,
        'offset' => $num,
    ));
    foreach ($second_new_post as $post) :
        setup_postdata($post);
    endforeach;
    wp_reset_postdata();
}

add_shortcode('nth_get_post', 'get_post');

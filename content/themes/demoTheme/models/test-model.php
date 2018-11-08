<?php
class Registrant {
    public function __construct($post) {
        $this->id = $post->ID;
        $this->post_title = $post->post_title;
        $this->post_name = $post->post_name;
        $this->post_status = $post->post_status;
        // [post_author] => 1
        // [post_date] => 2018-11-05 23:24:29
        // [post_date_gmt] => 2018-11-05 23:24:29
        // [post_content] =>
        // [post_title] => Aut dolor explicabo qui
        // [post_excerpt] =>
        // [post_status] => publish
        // [comment_status] => open
        // [ping_status] => closed
        // [post_password] =>
        // [post_name] => aut-dolor-explicabo-qui
        // [to_ping] =>
        // [pinged] =>
        // [post_modified] => 2018-11-05 23:24:29
        // [post_modified_gmt] => 2018-11-05 23:24:29
        // [post_content_filtered] =>
        // [post_parent] => 0
        // [guid] => http://localhost:8888/index.php/2018/11/05/aut-dolor-explicabo-qui/
        // [menu_order] => 0
        // [post_type] => post
        // [post_mime_type] =>
        // [comment_count] => 0
        // [filter] => raw

    }

    public static function post() {
        $post = get_post(73);
        $r = new Registrant($post);
        return $r;
    }
}



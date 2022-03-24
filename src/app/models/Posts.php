<?php

use Phalcon\Mvc\Model;

class Posts extends Model
{
    public $id;
    public $user_id;
    public $post_content;
    public $post_image;
    public $post_date;
    public $post_likes;
}

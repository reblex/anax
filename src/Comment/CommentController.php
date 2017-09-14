<?php

namespace Anax\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;


/**
 * Comment Controller.
 */
class CommentController implements AppInjectableInterface
{
    use AppInjectableTrait;


    public function makePost()
    {
        $poster = getPost("poster") ?: "";
        $content = getPost("content") ?: "";
        return $this->app->comment->makePost($poster, $content);
    }

    public function getAllPosts()
    {
        return $this->app->comment->getAll();
    }
}

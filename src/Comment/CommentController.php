<?php

namespace Anax\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Comment Controller.
 */
class CommentController implements InjectionAwareInterface
{
    use InjectionAwareTrait;


    public function makePost()
    {
        $poster = getPost("poster") ?: "";
        $content = getPost("content") ?: "";
        return $this->di->get("comment")->makePost($poster, $content);
    }

    public function getAllPosts()
    {
        $comments = $this->di->get("comment")->getAll();
        $this->di->get("view")->add("comments/comments", ["content" => $comments], "main");
        $this->di->get("pageRender")->renderPage(["title" => "Kommentarer"]);
    }
}

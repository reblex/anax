<?php

namespace Anax\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;


/**
 * Comment Model.
 */
class Comment implements AppInjectableInterface
{
    use AppInjectableTrait;

    function __construct()
    {
        $this->table = "comments";
    }


    public function makePost($poster, $content)
    {
        $keys = ["poster", "content"];
        $vals = [$poster, $content];

        return $this->app->dbController->insert($this->table, $keys, $vals);
    }

    public function getAll()
    {
        return $this->app->dbController->get($this->table);
    }
}

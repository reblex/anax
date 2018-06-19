<?php

namespace Anax\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Comment Model.
 */
class Comment implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    public function __construct()
    {
        $this->table = "comments";
    }

    public function makePost($poster, $content)
    {
        $keys = ["poster", "content"];
        $vals = [$poster, $content];

        return $this->di->get("dbController")->insert($this->table, $keys, $vals);
    }

    public function getAll()
    {
        return $this->di->get("dbController")->get($this->table);
    }
}

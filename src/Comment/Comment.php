<?php

namespace Anax\Comment;

use \Anax\Database\ActiveRecordModel;

/**
 * Comment Model.
 */
class Comment extends ActiveRecordModel
{

    protected $tableName = "comments";

    public $id;
    public $poster;
    public $content;
}

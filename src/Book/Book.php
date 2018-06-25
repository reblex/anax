<?php

namespace Anax\Book;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A database driven model.
 */
class Book implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    /**
     * @var string $tableName name of the database table.
     */
    protected $table = "Book";



    /**
     * Columns in the table.
     *
     * @var integer $id primary key auto incremented.
     */
    public $id;
    public $title;
    public $author;

    public function findAll()
    {
        return $this->di->get("dbController")->get($this->table);
    }

    public function find($col, $val)
    {
        // Should check if more than one is found(shouldn't happen), but whatever.
        $details = $this->di->get("dbController")->get($this->table, ["*"], [[$col, $val]])[0];

        $this->id = $details->id;
        $this->title = $details->title;
        $this->author = $details->author;
    }

    public function save()
    {
        $idSet = !is_null($this->id);

        if ($idSet) {
            $hits = $this->di->get("dbController")->get($this->table, ["*"], [["id", $this->id]]);
            if (count($hits) == 1) {
                $this->update();
            }
        } else {
            $this->create();
        }
    }

    public function create()
    {
        $keys = ["title", "author"];
        $vals = [$this->title, $this->author];

        return $this->di->get("dbController")->insert($this->table, $keys, $vals);
    }

    public function update()
    {
        $keys = ["title", "author"];
        $vals = [$this->title, $this->author];

        return $this->di->get("dbController")->update($this->table, $keys, $vals, [["id", $this->id]]);
    }

    public function delete()
    {
        return $this->di->get("dbController")->delete($this->table, [["id", $this->id]]);
    }
}

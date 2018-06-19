<?php

namespace Anax\Database;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;

class DatabaseController implements InjectionAwareInterface
{
    use InjectionAwareTrait;
    use ConfigureTrait;


    /**
     * Helper function to build WHERE statements
     * @param Array $wherePairs  Column name and column value pairs
     */
    private function buildWhere($wherePairs)
    {
        $where = "";
        if (count($wherePairs) > 0) {
            $where = " WHERE ";
            $count = 0;
            while ($count < count($wherePairs)) {
                $where .= $wherePairs[$count][0] . "=" . $wherePairs[$count][1];
                // If there are more "where"-statements
                if (!$count == (count($wherePairs) - 1)) {
                    $where .= " AND ";
                }
                $count++;
            }
        }
        return $where;
    }


    /**
     * Connect to a database.
     * @param  array $config Array with options for connecting.
     */
    public function connect()
    {
        $this->di->get("db")->connect($this->config);
    }


    /**
     * Insert data into the database
     * @param String $table     Name of table to use
     * @param Array $keys       Table column strings
     * @param Array $vals       Table new column value
     */
    public function insert($table, $keys, $vals)
    {
        $valTemps = [];

        // Must be same amount of keys and vals!!
        for ($i=0; $i < count($keys); $i++) {
            array_push($valTemps, "?");
        }

        $query = "INSERT INTO $table ("
                . implode(",", $keys)
                . ") VALUES ("
                . implode(",", $valTemps)
                . ");";

        return $this->di->get("db")->execute($query, $vals);
    }


    /**
     * Get data from the database
     * @param String $table     Name of table to use
     * @param Array $selectors  Columns to retrieve(opt), otherwise ALL
     * @param Array $wherePairs Column name and column value pairs
     */
    public function get($table, $selectors = ["*"], $wherePairs = [])
    {
        $where = $this->buildWhere($wherePairs);

        $query = "SELECT "
                . implode(",", $selectors)
                ." FROM $table"
                . $where
                . ";";

        return $this->di->get("db")->executeFetchAll($query);
    }


    /**
     * Update data in the database
     * @param String $table     Name of table to use
     * @param Array $keys       Table columns to update
     * @param Array $newvals    New column values
     * @param Array $wherePairs Column name and column value pairs
     */
    public function update($table, $keys, $newVals, $wherePairs)
    {
        $setPairs = [];
        for ($i=0; $i < count($keys); $i++) {
            $pair = $keys[$i] . "=" . "'" . $newVals[$i] . "'";
            array_push($setPairs, $pair);
        }

        $where = $this->buildWhere($wherePairs);

        $query = "UPDATE $table SET "
                . implode(",", $setPairs)
                . $where
                . ";";

        return $this->di->get("db")->execute($query);
    }

    /**
     * Delete data from the database
     * @param String $table     Name of table to use
     * @param Array $wherePairs Column name and column value pairs
     */
    public function delete($table, $wherePairs)
    {
        $where = $this->buildWhere($wherePairs);

        $query = "DELETE FROM $table "
                . $where
                . ";";

        return $this->di->get("db")->execute($query);
    }
}

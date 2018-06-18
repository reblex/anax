<?php

namespace Anax\Database;

/**
 * Database.
 */
class Database
{
    private $pdo;



    /**
     * Connect to a database.
     * @param  array $config Array with options for connecting.
     * @return void
     */
    public function connect($config)
    {
        try {
            $this->pdo = new \PDO(...array_values($config));
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo("Could not connect to database.\nException: $e");
        }
    }


    /**
     * Execute SQL with optional parameters.
     * @param  string $sql    Statement to execute.
     * @param  array  $params Values to match ? in statement.
     * @return PDOStatementHandler
     */
    public function execute($sql, $params = [])
    {
        $sth = $this->pdo->prepare($sql);
        if (!$sth) {
            $this->statementException($sth, $sql, $params);
        }

        $status = $sth->execute($params);

        if (!$status) {
            $this->statementException($sth, $sql, $params);
        }
        return $sth;
    }


    /**
     * Do SELECT with optional parameters and return a resultset.
     * @param  string $sql    Statement to execute.
     * @param  array  $params Parameters to match ? in statement.
     * @return array with resultset.
     */
    public function executeFetchAll($sql, $params = [])
    {
        $sth = $this->execute($sql, $params);
        $res = $sth->fetchAll();
        if ($res === false) {
            $this->statementException($sth, $sql, $params);
        }
        return $res;
    }


    private function statementException($sth, $sql, $params)
    {
        throw new \Exception(
            $sth->errorInfo()[2]
            . "<br><br>SQL ("
            . substr_count($sql, "?")
            . " params):<br><pre>$sql</pre><br>PARAMS ("
            . count($params)
            . "):<br><pre>"
            . implode($params, "\n")
            . "</pre>"
            . ((count(array_filter(array_keys($params), 'is_string')) > 0)
                ? "WARNING your params array has keys, should only have values."
                : null)
        );
    }
}

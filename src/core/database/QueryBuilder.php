<?php

/*** User: Sascha Wernars */

/**
 *
 * @author Sascha Wernars <s@scha.nl>
 */

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo){
         $this->pdo = $pdo;
    }
    
    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters){
        // insert into names (name, email) values (:name, :email)

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', :', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Whoops, something went wrong.');
        }
    }
    
    
}
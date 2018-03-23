<?php

class QueryBuilder {
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getAll($table)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY id DESC ");
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getByID($table, $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table} WHERE id={$id}");
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Delete Query
    public function deleteByID($table, $id){
        $this->pdo->exec("DELETE FROM {$table} WHERE id={$id}");
    }

    // Update Query
    public function update($table, $data, $selector) {
        function makePlaceholder($key) {
            return "$key=:$key";
        }

        $sql = sprintf('UPDATE %s SET %s WHERE %s', $table,
            implode(', ', array_map('makePlaceholder', array_keys($data))),
            implode(', ', array_map('makePlaceholder', array_keys($selector)))
            );
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }


    public function insert($table, $data){
            $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table ,
                implode(', ', array_keys($data)),
                ':'.implode(', :', array_keys($data))
            );
            //die(var_dump($sql));
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($data);
//        $sql = "INSERT INTO tasks (desc, status) VALUES ('$perami', '0')";
//        $this->pdo->exec($sql);
    }
}
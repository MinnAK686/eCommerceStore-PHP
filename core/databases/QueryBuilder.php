<?php 

class QueryBuilder extends Connection {
    protected static $dbh;
    protected static $stmt,$value,$sql,$execute;
    public function __construct($conf)
    {
        self::$dbh = Connection::make($conf);
    }
    public function get() {
        return self::$stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function getOne() {
        return self::$stmt->fetch(PDO::FETCH_OBJ);
    }
    
    // Query
    public function query($sql) {
        self::$sql = $sql;
        self::$stmt = self::$dbh->prepare($sql);
        self::$stmt->execute();
        return $this;
    }

    // Select All Query
    public function selectAll(string $table) {
        self::$sql = "SELECT * FROM $table";
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute();
        return $this;
    }

    // Insert Query
    public function insert(array $data, string $table) {
        $dataKeys = array_keys($data);
        $dataValues = array_values($data);
        $cols = implode(",",$dataKeys);
        $q = "";
        foreach($dataKeys as $key) {
            $q .= "?,";
        }
        $q = trim($q,",");
        self::$sql = "INSERT INTO $table ($cols) VALUES ($q)"; // INSERT INTO todos (desc,complete) VALUES (?,?)
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute($dataValues);
    }

    // Updata Query
    public function update(array $data, int $id, string $table) {
        $dataKeys = array_keys($data);
        $dataValues = array_values($data);
        $colsValues = "";
        foreach($data as $key=>$value) {
            $colsValues .= $key . "=?,";
        }
        $colsValues = trim($colsValues, ",");
        self::$sql = "UPDATE $table SET $colsValues WHERE id=$id"; // UPDATE todos SET (desc=?,complete=?)
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute($dataValues);
    }

    // Delete Query
    public function delete(int $id, string $table) {
        self::$sql = "DELETE FROM $table WHERE id=$id";
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute();
    }

}

<?php
interface DbHandler
{
    public function connect();
    public function get_record_by_id($id, $primary_key);
}

class DB implements DbHandler
{
    private $conn;
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }



    public function connect()
    {
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn) {
            return true;
        } else {
            return false;
        }
    }







    public function get_record_by_id($id, $primary_key)
    {
        $data = [];
        $query = "select * from `$this->table` where `$primary_key` = $id";
        $result = mysqli_query($this->conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
        }

        return $data;
    }
}




?>
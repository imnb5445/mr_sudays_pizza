<?php

class itemController
{

    public function __construct()
    {
        $db = new database();
        $this->conn = $db->conn;
    }

    public function fetch_group_menu()
    {
        $query = "SELECT * FROM group_menu";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function fetch_addons()
    {
        $query = "SELECT * FROM addon";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
;





?>
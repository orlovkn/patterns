<?php

class Patches
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=gwcontroller", "gosweb", "12345");
    }

    public function load($id)
    {
        $sql = 'SELECT * FROM patch WHERE id = ' . (int) $id;
        $result = $this->db->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        foreach ($row as $column => $value) {
            $this->column[] = $value;
        }
    }
}
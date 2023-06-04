<?php
class koneksi{
    public function __construct(){
        $this->mysqli = new mysqli('localhost', 'root', 'pawas5546', 'proyekakhir');
    }
    public function getConnection(){
        return $this->mysqli;
    }
}
?>
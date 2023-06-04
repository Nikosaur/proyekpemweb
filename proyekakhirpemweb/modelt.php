<?php
require "koneksit.php";
class modelt {
    private $id_transaksi; 
    private $id_produk;
    private $waktu_transaksi;
    private $jumlah_produk;
    private $total;
    private $connect;
    function __construct(){
        $this->connect = new koneksit();
    }
    function execute($query){
        return mysqli_query($this->connect->getConnection(),$query);
    } 
    function readall(){
        $query = "SELECT * FROM transaksi";
        return $this->execute($query);
    } 
    function read($id_transaksi){
        $query = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
        return $this->execute($query);
    } 
    function update($id_transaksi, $jumlah_produk, $total){
        $waktu_transaksi = date('Y-m-d');
        $query = "UPDATE transaksi SET id_transaksi='$id_transaksi', waktu_transaksi='$waktu_transaksi', jumlah_produk='$jumlah_produk', total='$total' WHERE id_transaksi='$id_transaksi'";
        return $this->execute($query);
    } 
    function delete($id_transaksi){
        $query = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
        return $this->execute($query);
    } 
    function create($id_transaksi, $id_produk, $jumlah_produk, $total){
        $waktu_transaksi = date('Y-m-d');
        $query = "INSERT INTO transaksi (id_transaksi, id_produk, waktu_transaksi, jumlah_produk, total) VALUES ('$id_transaksi', '$id_produk', '$waktu_transaksi', '$jumlah_produk', '$total')";
        return $this->execute($query);
    }    
    function fetch($var){
        return mysqli_fetch_array($var);
    } 
    function __destruct(){
    }
}
?>


<?php
require "koneksi.php";
class modelp {
    private $id_produk; 
    private $nama;
    private $harga;
    private $jumlah;
    private $connect;
    function __construct(){
        $this->connect = new koneksi();
    }
    function execute($query){
        return mysqli_query($this->connect->getConnection(),$query);
    } 
    function readall(){
        $query = "SELECT * FROM produk";
        return $this->execute($query);
    } 
    function read($id_produk){
        $query = "SELECT * FROM produk WHERE id_produk='$id_produk'";
        return $this->execute($query);
    } 
    function update($id_produk, $nama, $harga, $jumlah){
        $query = "UPDATE produk SET id_produk='$id_produk', nama='$nama', harga='$harga', jumlah='$jumlah' WHERE id_produk='$id_produk'";
        return $this->execute($query);
    } 
    function delete($id_produk){
        $query = "DELETE FROM produk WHERE id_produk='$id_produk'";
        return $this->execute($query);
    } 
    function create($id_produk, $nama, $harga, $jumlah){
        $query = "INSERT INTO produk (id_produk, nama, harga, jumlah) VALUES ('$id_produk', '$nama', '$harga', '$jumlah')";
        return $this->execute($query);
    } 
    function fetch($var){
        return mysqli_fetch_array($var);
    } 
    function __destruct(){
    }
}
?>


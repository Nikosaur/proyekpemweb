<?php
include_once("modelp.php");
class controllerp{
    public $modelp;
    function __construct(){
        $this->modelp = new modelp();
    }
    function read(){
        $data = $this->modelp->readall(); 
        include "produkpage.php"; 
    }
    function updatepage($surat){
        $data = $this->modelp->read($surat); 
        $row = $this->modelp->fetch($data); 
        include "update.php"; 
    }
    function createpage(){
        include "create.php"; 
    }
    function update(){
        $id_produk = $_POST['id_produk'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $update = $this->modelp->update($id_produk, $nama, $harga, $jumlah);
        header("location:sistemp.php");
    }
    function delete($id_produk){
        $delete = $this->modelp->delete($id_produk);
        header("location:sistemp.php");
    }
    function create(){
        $id_produk = $_POST['id_produk'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $insert = $this->modelp->create($id_produk, $nama, $harga, $jumlah);
        header("location:sistemp.php");
    }
    function __destruct(){
    }
}
?>

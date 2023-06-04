<?php
include_once ("modelt.php");
include_once ("modelp.php");

class controllert{
    public $modelt;
    public $modelp;
    public function __construct(){
        $this->modelt = new modelt();
        $this->modelp = new modelp();
    }
    public function read(){
        $data = $this->modelt->readall();
        include "transaksipage.php";
    }
    function updatepage($surat){
        $data = $this->modelt->read($surat); 
        $row = $this->modelt->fetch($data); 
        include "updatet.php"; 
    }
    function createpage(){
        include "createt.php"; 
    }
    public function create(){
        $id_transaksi = $_POST['id_transaksi'];
        $id_produk = $_POST['id_produk'];
        $jumlah_produk = $_POST['jumlah_produk'];
        $total = $_POST['total'];
        $update = $this->modelt->create($id_transaksi, $id_produk, $jumlah_produk, $total);
        header("location:sistemt.php");
    }
    public function update(){
        $id_transaksi = $_POST['id_transaksi'];
        $jumlah_produk = $_POST['jumlah_produk'];
        $total = $_POST['total'];
        $update = $this->modelt->update($id_transaksi, $jumlah_produk, $total);
        header("location:sistemt.php");
    }
    function delete($id_transaksi){
        $delete = $this->modelt->delete($id_transaksi);
        header("location:sistemt.php");
    }
}
?>

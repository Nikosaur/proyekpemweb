<?php
include_once ("controllert.php");
$controllert = new controllert();
if(isset($_GET['u'])){ 
    $id_transaksi = $_GET['u'];
    $controllert->updatepage($id_transaksi);
}else if(isset($_GET['d'])){ 
    $id_transaksi = $_GET['d'];
    $controllert->delete($id_transaksi);
}else if(isset($_GET['c'])){
    $controllert->createpage(); 
}else{
    $controllert->read();
}
?>
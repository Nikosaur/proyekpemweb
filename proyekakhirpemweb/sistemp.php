<?php
include_once ("controllerp.php");
$controllerp = new controllerp();
if(isset($_GET['u'])){ 
    $id_produk = $_GET['u'];
    $controllerp->updatepage($id_produk);
}else if(isset($_GET['d'])){ 
    $id_produk = $_GET['d'];
    $controllerp->delete($id_produk);
}else if(isset($_GET['c'])){
    $controllerp->createpage(); 
}else{
    $controllerp->read(); 
}
?>
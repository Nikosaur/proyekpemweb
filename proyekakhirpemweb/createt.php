<?php
include_once "modelp.php";
$modelp = new modelp();

$produkList = $modelp->readall();

if (isset($_POST['submit'])) {
  $id_produk = $_POST['id_produk'];
}
?>

<html>
<head>
    <title>Create Transaksi</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #2d3e50;
        }

        form {
            margin: 50px auto;
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #888;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: none;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 450%;
            background-color: #2d3e50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #1b2838;
        }
        .back {
            width: 79%;
            background-color: #2d3e50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            margin-left: 81px;
        }

        .back:hover {
            background-color: #1b2838;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            border-radius: 5px;
        }
        select{
            height: 30px;
            width: 50%;
        }
    </style>
</head>
<body>
    <h1>Input Transaksi</h1>
    <form action="" method="POST">
        <table border ="0">
            <tr>
                <td>ID Transaksi</td>
                <td><input type="text" name="id_transaksi" size="45"/></td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td>
                    <form method="POST" action="">
                        <select name="id_produk">
                            <?php
                            while ($row = $modelp->fetch($produkList)) {
                                echo "<option value='" . $row['id_produk'] . "'>" . $row['id_produk'] . "</option>";
                            }
                            ?>
                        </select>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Waktu Transaksi</td>
                <td><input type="text" value="<?php echo date('Y-m-d'); ?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Pembelian</td>
                <td><input type="text" name="jumlah_produk" size="45"/></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input type="text" name="total" size="45"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"/></td>
            </tr>
        </table>
        <div>
            <a href="sistemt.php"><input class="back" type="button" value="Back"/></a>
        </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){ 
    $main = new controllert();
    $main->create();
}
?>
<html>
<head>
    <title>Update Transaksi</title>
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
    </style>
</head>
<body>
    <h1>Update Data</h1>
    <form action="" method="POST">
        <table border ="0">
            <tr>
                <td>ID Transaksi</td>
                <td><input type="text" name="id_transaksi" value="<?=$row[0]?>" size="45" readonly/></td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td><input type="text" name="id_produk" value="<?=$row[1]?>" size="45" readonly/></td>
            </tr>
            <tr>
                <td>Waktu Transaksi</td>
                <td><input type="text" value="<?php echo date('Y-m-d'); ?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Pembelian</td>
                <td><input type="text" name="jumlah_produk" value="<?=$row[3]?>" size="45"/></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input type="text" name="total" value="<?=$row[4]?>" size="45"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"/></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){ 
    $main = new controllert();
    $main->update();
}
?>
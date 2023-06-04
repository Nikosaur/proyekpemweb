<html>
<head>
    <title>Create Produk</title>
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
            width: 530%;
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
            width: 74.5%;
            background-color: #2d3e50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            margin-left: 97px;
        }

        .back:hover {
            background-color: #1b2838;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <h1>Input Produk</h1>
    <form action="" method="POST">
        <table border ="0">
            <tr>
                <td>ID Produk</td>
                <td><input type="text" name="id_produk" size="45"/></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama" size="45"/></td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td><input type="text" name="harga" size="45"/></td>
            </tr>
            <tr>
                <td>Jumlah Produk</td>
                <td><input type="text" name="jumlah" size="45"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"/></td>
            </tr>
        </table>
        <div>
            <a href="sistemp.php"><input class="back" type="button" value="Back"/></a>
        </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){ 
    $main = new controllerp();
    $main->create();
}
?>
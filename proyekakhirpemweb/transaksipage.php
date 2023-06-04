<!DOCTYPE html>
<html>
<head>
	<title>PaKo Mart</title>
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

		.form{
			margin: 50px auto;
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #888;
		}

		table{
			margin: auto;
            border-collapse: collapse;
		}

		td {
            padding: 10px;
        }

		.smlogin{
			width: 91%;
            background-color: #2d3e50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            margin-left: 34px;
		}
		.run:hover{
			background-color: #1b2838;
		}
		tr:nth-child(even) {background-color: #f2f2f2;}
	</style>
</head>
<body>
	<h1>PaKo Mart</h1>
	<div class="form">
	<a href='sistemt.php?c=add'>
        <tr>
			<td><button class= "smlogin run">Add Transaksi</button><td>

        </tr>
    </a>
	<table border="1">
        <tr align="center">
			<br>
			<br>
			<td>ID Transaksi</td>
			<td>ID Produk</td>
			<td>Waktu Transaksi</td>
			<td>Jumlah Pembelian</td>
            <td>Total Harga</td>
            <td colspan="2">Ubah data</td>
		</tr>
		<?php
		while ($row = $this->modelt->fetch($data)) {
			echo "
                <tr>
                    <td>$row[0]</td>
					<td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                    <td><button class='bt table' type='button' onclick=\"window.location.href='sistemt.php?u=$row[0]'\">Update</button></td>
                    <td><button class='bt table' type='button' onclick=\"if(confirm('Hapus Data?')) window.location.href='sistemt.php?d=$row[0]'\">Delete</button></td>
                </tr>";
		}
		?>
	</table>
	<br>
    <br>
    <br>
	<a href='index.php'><button class= "smlogin run">Back</button></a>
	</div>
</body>
</html>

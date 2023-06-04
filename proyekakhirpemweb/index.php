<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<?php
	if(isset($_GET['logout'])){
		session_destroy();
		header("Location: login.php");
		exit;
	}
?>

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

        .form {
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

        input[type="text"],
        textarea {
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
            width: 100%;
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
            width: 100%;
            background-color: #2d3e50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .back:hover {
            background-color: #1b2838;
        }

        button {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 100%;
            background-color: #e7e7e7;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button-primary {
            background-color: #2d3e50;
            border: 2px solid #2d3e50;
        }

        .button-primary:hover {
            background-color: #1b2838;
        }
    </style>
</head>
<body>
    <h1>PaKo Mart</h1>
    <div class="form">
        <a href="sistemp.php"><button class="button-primary">Produk</button></a>
        <a href="sistemt.php"><button class="button-primary">Transaksi</button></a>
        <a href="index.php?logout=true"><button class="back">Logout</button></a>
    </div>
</body>
</html>

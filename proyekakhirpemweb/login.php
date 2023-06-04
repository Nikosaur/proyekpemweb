<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if ($_SESSION['role'] === 'karyawan') {
        header('Location: index.php');
    }
    exit;
}

$username = $password = '';
$username_err = $password_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['username']))) {
        $username_err = 'Tolong masukkan username';
    } else {
        $username = trim($_POST['username']);
    }

    if (empty(trim($_POST['password']))) {
        $password_err = 'Tolong masukkan password';
    } else {
        $password = trim($_POST['password']);
    }

    if (empty($username_err) && empty($password_err)) {
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'admin';
            header('Location: index.php');
            exit;
        } else {
            $password_err = 'Password atau Username salah';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        form{
			margin: 50px auto;
            width: 20%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #888;
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
        input[type="password"], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: none;
            font-size: 16px;
        }
        .smlogin{
            width: 50%;
            background-color: #2d3e50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            margin-left: 75px;
        }
        .run:hover{
			background-color: #1b2838;
		}
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <span><?php echo $username_err; ?></span>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span><?php echo $password_err; ?></span>
            <br>
            <button class= "smlogin run">Login</button>
    </form>
</body>
</html>

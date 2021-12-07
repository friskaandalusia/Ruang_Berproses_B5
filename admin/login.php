<?php

session_start();

require 'koneksi.php';

// cek cookie
if (isset($_COOKIE['imp_info']) && isset($_COOKIE['key'])) {
    $imp_info = $_COOKIE['imp_info'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE id_admin=$imp_info");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    if ($_SESSION['role'] == 1) {
        header("Location: dashboard.php");
        exit;
    }
    header("Location: ../index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if ($password === $row["password"]) {

            // set session
            $_SESSION["login"] = true;
            $_SESSION["role"] = $row["role"];
            $_SESSION["username"] = $username;
            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie

                setcookie('imp_info', $row['imp_info'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
                setcookie('role', $row['role'], time() + 60);
            }

            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
      <style>
        * {
          box-sizing: border-box;
        }

        /* style the container */
        .container {
          margin-top: 15%;
          position: relative;
          border-radius: 5px;
          padding: 20px 0 30px 0;
        } 
        /* style inputs and link buttons */
        input,
        .btn {
          width: 100%;
          padding: 12px;
          border: none;
          border-radius: 4px;
          margin: 5px 0;
          opacity: 0.85;
          display: inline-block;
          font-size: 17px;
          line-height: 20px;
          text-decoration: none; /* remove underline from anchors */
        }
        /* style the submit button */
        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        /* hide some text on medium and large screens */
        .hide-md-lg {
          display: none;
        }

        /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 650px) {
          .col {
            width: 100%;
            margin-top: 0;
          }
          /* show the hidden text on small screens */
          .hide-md-lg {
            display: block;
            text-align: center;
          }
        }
      </style>
</head>
<body style="background-color:wheat;">
<div class="container">	
<form action="" method="post">
    <div class="row">
	    <center>
      <div class="row" style="width:50%;">
        <div class="hide-md-lg">
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
        <input type="submit" value="Login" name="login">
        
        <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username/password salah</p>
        <?php endif; ?>
      </div>
      </center>
    </div>
  </form>
</div>    
</body>
</html>
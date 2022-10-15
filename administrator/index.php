<?php
if(isset($_POST['login'])){
    
}

header("Location: main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='kotak'>
        <form action='' method='post' >

            <p>Username :<br />
            <input type='text' name='username' autocomplete = "off" /></p>

            <p>Password :<br />
            <input type='password' name='password' autocomplete = "off" /></p>

            <p><button type='submit' name="login">Login</button></p>
        </form>
    </div>";
</body>
</html>

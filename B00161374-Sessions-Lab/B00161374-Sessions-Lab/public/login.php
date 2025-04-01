<?php
require_once ('../public/config.php'); // This is where the username and password are currently stored (hardcoded in variables)
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Sign in</title>
</head>

<body>

<form action="" method="post">
    <input type="text" name="Username" placeholder="Enter Username">
    <input type="password" name="Password" placeholder="Enter Password">
    <button type="submit" name="Submit">Sign in</button>
</form>

<?php
if(isset($_POST['Submit']))
{
    if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
    {
        echo 'Success';
        /* Success: Set session variables and redirect to protected page */
        $_SESSION['Username'] = $username; 
        $_SESSION['Active'] = true;
        header("location:index.php"); 
        exit;
    }
    else
    {
        echo 'Incorrect Username or Password';
    }
}
?>
</body>
</html>

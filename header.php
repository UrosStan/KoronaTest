<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Korona test</title>
</head>
<body>
    <nav>
        <div class="wrapper">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About us</a></li>
            <li><a href="index.php">Find blogs</a></li>
            <?php
            if(isset($_SESSION["useruid"])){
                
                echo "<li><a href='profile.php'>Profile page</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";

            }else{
                
                echo "<li><a href='signup.php'>Sign up</a></li>";
                echo "<li><a href='login.php'>Login</a></li>";
            }
            ?>
           
            
         </ul>
        </div>
    </nav>
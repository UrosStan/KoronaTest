<?php
include_once 'header.php';
?>

<section>
<?php
            if(isset($_SESSION["useruid"])){
                
                echo "<p>Hello there " .$_SESSION["useruid"] . " </p>";
                
            }
            // else{
                
            //     echo "<li><a href='signup.php'>Sign up</a></li>";
            //     echo "<li><a href='login.php'>Login</a></li>";
            // }
            ?>
</section>
<?php
include_once 'footer.php';
?>
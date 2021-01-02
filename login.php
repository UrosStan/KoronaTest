<?php
include_once 'header.php';
?>

<section class ="signup-form">
<h2>Login</h2>
<form action="includes/login.inc.php" method="post"> 
    <input type="text" name="uid" placeholder="Username/Email..." >    
    <input type="password" name="pwd"placeholder="Password... ">    
   
    <button type="submit" name="submit">Login</button>


</form>

<?php
if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill in all fields </p>";
    }
    if($_GET["error"]=="wronglogin"){
        echo "<p>Incorrect login information </p>";
    }
    if($_GET["error"]=="none"){
        echo "<p>You have succesfully logged in </p>";
    }

}
?>
</section>
<?php
include_once 'footer.php';
?>
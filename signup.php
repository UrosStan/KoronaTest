<?php
include_once 'header.php';
?>

<section class ="signup-form">
<h2>Sign up</h2>
<form action="includes/signup.inc.php" method="post"> 
    <input type="text" name="uid" placeholder="Username..." >    
    <input type="text" name="name" placeholder="Name..." >
    <input type="text" name="lastname" placeholder="Last name...">
    <input type="email" name="email" placeholder="Email..." >
    <input type="password" name="pwd"placeholder="Password... ">    
    <input type="password" name="pwdrepeat"placeholder="Repeat password... "> 
    Pol:M-F 
    <input type="radio" name="pol" id="muski" >  
    <input type="radio" name="pol" id="zenski"> 
    <button type="submit" name="submit"> Sign up</button>


</form>

<?php
if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill in all fields </p>";
    }
    if($_GET["error"]=="invaliduid"){
        echo "<p>Enter a proper username </p>";
    }
    if($_GET["error"]=="invalidemail"){ 
        echo "<p>Fill in the email correctly </p>";
    }
    if($_GET["error"]=="passwordsdontmatch"){
        echo "<p>Your passwords don't match </p>";
    }
    if($_GET["error"]=="stmtfailed"){
        echo "<p>Something went wrong, try again</p>";
    }
    if($_GET["error"]=="usernameoremailtaken"){
        echo "<p>Username or email is already taken </p>";
    }
    if($_GET["error"]=="none"){
        echo "<p>You have signed up succesfully </p>";
    }
}
?>
</section>

<?php
include_once 'footer.php';
?>
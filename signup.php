<?php
include_once 'header.php';
?>

<section class ="signup-form">
<h2>Sign up</h2>
<form action="signup.inc.php" method="post"> 
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

</section>
<?php
include_once 'footer.php';
?>
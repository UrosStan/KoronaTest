<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["pol"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup ($name,$email,$uid,$pwd,$pwdrepeat,$lastname)!== false) {
        header("location: ../signup.php?error=emptyInput");
        exit();
    }

    if (invalidUid ($uid)!== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail ($email)!== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (uidExists ($conn, $uid,$email)!== false) {
        header("location: ../signup.php?error=usernameoremailtaken");
        exit();
    }
    if (pwdMatch ($pwd,$pwdrepeat)!== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    createUser($conn, $name,$lastname, $email,$uid,$gender,$pwd);



} 
 else {
    header("location: ../signup.php");
    exit();
}

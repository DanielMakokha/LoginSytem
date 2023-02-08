<?php
include('include/config.php');
if(isset($_POST["email"])){
    $email = $POST["email"];
    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if($password==$confirm_password){
        $encrypted_password=hash('md5',$password);
        $sql = "insert into users(email,firstname,surname,password)values ('$email','$firstname','$surname','$encrypted_password')";
        mysqli_query($conn, $sql) or die("Data Not Saved");
        echo "user account created succefully";

    }else{
        echo "<p style='color:red,text-align:center'>Please Re-confirm your password</p>";
    }
}
?>
<?php
session_start();
$conn = mysqli_connect("localhost","admim","Admin@123","Login");


if(isset($_POST["action"]))
{
if(($_POST["action"]) == "register")
{
     register();
}
// else if($_POST["action"] == "login")
// {
//     login();
// }

}

function register()
{
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password =$_POST["password"];
    $phone =$_POST["phone"];
    $bday =$_POST["bday"];


    if(empty($name) || empty($email) || empty($password))
    {
        echo "Fill the form";
        exit;
    }
    $user = mysqli_query($conn, "SELECT * FROM users where name = '$name'");
    if(mysqli_num_rows($user)>0)
    {
        echo "Username has already taken";
        exit;
    }

    $query = "INSERT INTO users VALUES('','$name','$email','$password','$phone','$bday')";

    mysqli_query($conn ,$query);
    echo " Register Successfully";

}
?>
<?php
$path = mysqli_connect('localhost','id12390258_mydb','Abirn','id12390258_mydb');
if(isset($_POST['button']))
{
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $que = "SELECT * FROM user_det WHERE user = '$user' AND pass = '$pass' ";

    $ans=($path->query($que));

    $row = mysqli_num_rows($ans);

    if($row==1){
        $_SESSION['user']=$user; 
        header('location:profile.php'); 
    }
    else{
        header('location:index.html');
    }

}
?>
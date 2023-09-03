<?php
if(!isset($_POST['submit']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
}
    $conn = mysqli_connect("localhost","root","","student");
    $sql="SELECT * from login WHERE username='$user' AND password='$pass' ";
    $result=mysqli_query($conn,$sql);
    $resultcheak=mysqli_num_rows($result);
    if( $resultcheak > 0){
        echo "login success";
    }
    else{
        echo "password or username incorrect";
    }
?>
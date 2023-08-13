<?php
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    $con=mysqli_connect('localhost','root','','form');
    $user_name=$_POST['emailf'];
    $pass_word=$_POST['pass'];
    $exe=mysqli_query($con,$q);
    $subject = "LOGGEDIN";
    $body = "this is sample mail";
    if ($exe){
        if(mail($user_name,$subject,$body))
        {
            echo "mail sent";
        }
        else{
            echo " not sent ";
        }
    }
    else{
        echo " there is wrong in database";
    }
}

?>

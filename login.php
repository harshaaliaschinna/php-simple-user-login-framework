<?php
/*
Author: harshaaliaschinna
E-mail: harshaaliaschinna@gmail.com
Script: php-simple-user-login-framework
*/
include "dbopen.php";
// Starting session
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(!empty($_POST['password'])&&!empty($_POST['email'])&&isset($_POST['password'])&&isset($_POST['email']))
    {
        $email=mysqli_real_escape_string($dbcon,$_POST['email']);
        $pass=mysqli_real_escape_string($dbcon,$_POST['password']);
        $pass=md5($pass);
        $sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $sql_res=mysqli_query($dbcon,$sql);
        $count=mysqli_num_rows($sql_res);
        // if there exists only one user with email and password
        if($count==1)
        {
            $row=mysqli_fetch_assoc($sql_res);
            // Storing userid using session variables
            $_SESSION['uid']=$row['uid'];
            // Redirecting user to dashboard
            header("location: dash.php");
        }
        else
        {
            $msg="Incorrect Email or password!!";
        }
    }
    else
    {
        $msg="Please Fill All Fields";
    }
}
?>
<?php echo "</br>".$msg; ?>
<form action="login.php" method="post">
    <input type="email" name="email" placeholder="Enter email"></br>
    <input type="password" name="password" placeholder="Enter password"></br>
    <input type="submit" value="SIGN IN">
</form>

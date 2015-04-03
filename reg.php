<?php
/*
Author: harshaaliaschinna
E-mail: harshaaliaschinna@gmail.com
Script: php-simple-user-login-framework
*/

include "dbopen.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(!empty($_POST['password'])&&!empty($_POST['email'])&&isset($_POST['password'])&&isset($_POST['email']))
    {
            $pass=mysqli_real_escape_string($dbcon,$_POST['password']);
            $email=mysqli_real_escape_string($dbcon,$_POST['email']);
            // Storing Password in md5 encryption
            $pass=md5($pass);
            $sql="INSERT INTO users(email,password) VALUES('$email','$pass')";
            $sql_res=mysqli_query($dbcon,$sql);
            // If registration Successful
            if($sql_res)
            {
                $msg="Successfully signed up";
            }
            else{
                $msg="Error! signing up".mysqli_erno();
            }
    }
    else
    {
        $msg="Please fill all fields!";
    }
}
?>
<?php echo "</br>".$msg; ?></br></br>
<form action="reg.php" method="post" >
    <input type="email" name="email" placeholder="Enter your email"><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" value="SIGN UP">
</form>

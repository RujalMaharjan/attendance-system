<?php
include_once 'connect.php';
$uname=$_POST['user'];
$pass=$_POST['pass'];

$sql="SELECT * FROM humanresource WHERE userID='$uname';";
$qry=mysqli_query($conn, $sql);
if(!$qry)
{
    die("connection  Failed: ". mysqli_error());
}
else
{
   $row=mysqli_fetch_array($qry);
   if($uname=='' || $pass=='')
        {
            header("Location:index.php");
        }
    elseif($uname==$row['userID'])
    {
        
        if($uname==$row['userID'] && $pass==$row['password'])
        {
            header("Location: employee-list.php");    
        }
        else
        {
            header("Location:index.php?id=Your password is incorrect!!!<br> Please try again!!!");
        }
    }
    else
    {   
        header("Location:index.php?id=Your username or password is incorrect!!!<br> Please try again!!!");
    }
}
?>

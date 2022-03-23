<?php 
    $account=$_POST["account"];
    $password=$_POST["password"];
       
if( $account==$account && $password==$password)
{
    header("location: index1.php");
}
else
{
    header("location: false.php");
}

?>
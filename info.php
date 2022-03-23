<htnl>
<head>
    <center><font size="10">註冊確定頁面</font></center>
</head>
<body>
    您的資訊為：
    <form action="log.php" method="post">

<?php
$account=$_POST["account"];
$password=$_POST["password"];
$mail=$_POST["mail"];
$phone=$_POST["phone"]; 

echo "account:".$account.'<br>';
echo "password:".$password.'<br>';
echo "email:".$mail.'<br>';
echo "phone number:".$phone.'<br>';
?>
<input type="submit" name="" value="登入畫面"></center><br>

</form>    
</body>

</html>
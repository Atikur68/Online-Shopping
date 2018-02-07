<?php
session_start();
?>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("online_shopping", $connection); // Selecting Database from Server
$id=1;
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$email = $_POST['email'];
$pass = $_POST['userpassword'];
$_SESSION['email'] = $email;
$sql=mysql_query("select * from userinfo where email ='".$_POST['email']."' and password='".$_POST['userpassword']."'");
while($row = mysql_fetch_array($sql))
{
$useremail = $row['email'];
$password = $row['password'];

echo $useremail;
echo $password;
echo $id;
if($email==$useremail && $pass==$password){
    //header("location:cartAction.php?action=addToCart&id='$id'");
	echo'<script> window.location="cartAction.php?action=addToCart&id=1"; </script> ';
    exit;

}
if($email=='admin'&& $password='123'){
	echo'<script> window.location="examples/dashboard.php"; </script> ';
    exit;
}
if($useremail==''|| $password=''){
	echo'<script> window.location="register.php"; </script> ';
    exit;
}
}
}

mysql_close($connection); // Closing Connection with Server
?>
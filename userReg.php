<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("online_shopping", $connection); // Selecting Database from Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpassword'];
$address=$_POST['useraddress'];
$confirm_password = $_POST['userconfirm_password'];
echo "hello";

if($username !=''&& $email !=''){
//Insert Query of SQL

if($password==$confirm_password)
{
$query = mysql_query("insert into userinfo(name,email,password,address) values ('$username','$email','$password','$address')"); // <Database> V <locla var>
echo "<br/><br/><span>Congratulation !!! You are now regisgtered User !!</span>";
}

else
{
echo "<br/><br/><span>Password Mismatch</span>";
}
}
else{

echo "<h1>Insertion Failed <br/> Some Fields are Blank....!!</h1>";
}
}
mysql_close($connection); // Closing Connection with Server
?>



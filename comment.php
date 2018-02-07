<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
     
</head>
</head>
<body>
  
 
    <div>
				<?php
         $id=$_GET['id'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("online_shopping", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ 
$name=$_POST['name'];
$comment=$_POST['comment'];
$id=$_POST['id'];
$query = mysql_query("insert into comment(comment,name,user_id) values('$comment','$name','$id')"); // <Database> V <locla var>

}


$sql=mysql_query("select * from comment where user_id ='$id'");
while($row = mysql_fetch_array($sql))
{
$comment = $row['comment'];
$name=$row['name'];


						
						

?>
                <h3>Name:<?php echo $name;?><h3>
                <h4>Comment: <?php echo $comment;?><h4>				
<?php } ?>
				</div>
				<?php
						$ee=$_SESSION['email'];
						//$rr1=$_SESSION['unm'];
						 $id=$_GET['id'];
						if($ee=='')
                                                    {
							?>
							<a href="register.php">Comment</a>
						<?php }
						else
						{
                        ?>						
						<form action="comment.php?id=<?php echo $id;?>" method="post">
							<TEXTAREA name="comment" style="width:200px;"></TEXTAREA>
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<input type="hidden" name="name" value="<?php echo $ee;?>">
							<input type="submit" name="submit" value="Comment">
							</form>
							<?php
						}
						
						?>
						<br>
						<br>
			</div>
            
    
    
</body>
</html>

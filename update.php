<!DOCTYPE html>

<?php include 'db.php' ;
$id=(int)$_GET['id'];
$sql="select * from tasks where id='$id'";
$rows=$db->query($sql);
$row=$rows->fetch_assoc();

if(isset($_POST['send'])){
	$task=htmlspecialchars($_POST['task']);
	$sql2="update tasks set name = '$task' where id ='$id'";
	$db->query($sql2);
	header('location: index.php');
};
?>

<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Crud App</title>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top:70px;">
			<center><h1>UPDATE TODO LIST</h1></center>

			<div class="col-md-10 col-md-offset-1">
				<table class="table">
					<form method="post">
						<div class="from-group">
							<label>Task Name</label>
							<input type="text" value="<?php echo $row['name'];?>"required name="task" class="form-control">
						</div>
						<br>
						<input type="submit" name="send" value="Add Task" class="btn btn-success">
						&nbsp;
						<a href="index.php" class="btn btn-warning">Back</a>
					</form>	
				</table>
			</div>
		</div>
	</div>
</body>
</html>
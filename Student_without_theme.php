<?php
$connect = mysqli_connect("localhost","root","","intern_student1");

if($_POST){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$City = $_POST['City'];
		$clg = $_POST['clg'];
		$branch = $_POST['branch'];
		$sem = $_POST['sem'];

		$q = mysqli_query($connect,"insert into tbl_student11 values ('$id','$name','$gender','$email','$mobile','$address','$City','$clg','$branch','$sem')") or die("Error".mysqli_error($connect));

		if($q){
			echo "<script>alert('Your details Successfully added & mail your details at your mail id:$email')</script>";
			
					}
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Student Entry</title>
</head>
<body>
	<form method="post">
		<h1 style="color: red;">Registration form</h1>
    
	Enter Your id : <input type="number" name="id"><br><br>
	Enter Your Name : <input type="text" name="name"> <br><br>
	select Your Gender :<select  name="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select><br><br>
  Enter Your Email : <input type="text" name="email"><br><br>
   Enter Your Mobile : <input type="text" name="mobile"><br><br>
    Enter Your Address : <input type="text" name="address"><br><br>
     Enter Your City : <input type="text" name="City"><br><br>
      Enter Your Collage Name : <input type="text" name="clg"><br><br>
       Enter Your Branch : <input type="text" name="branch"><br><br>
        Enter Your Semester : <input type="text" name="sem"><br><br>
        <input type="submit" name="submit">


</body>
</html>
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
			echo "<script>alert('Your details Successfully added & mail your details at your mail id: $email')</script>";
			
					}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<form method="post">
	<table id="customers" style="width: 500px; margin-left: 450px; margin-top: 100px;">
  <tr>
    <th colspan="2" style="text-align: center;">Registration Form</th>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Id:</td>
    <td><input type="text" name="id" required></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Name:</td>
    <td><input type="text" name="name" required></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your gender:</td>
    <td><select  name="gender" >
  				<option value="male">Male</option>
  				<option value="female">Female</option>
  		</select>	
	</td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Email:</td>
    <td><input type="text" name="email" required></td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Your Mobile:</td>
    <td><input type="text" name="mobile" required></td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Your Address:</td>
    <td><input type="text" name="address" required></td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Select Your City:</td>
    <td><select  name="City">
  				<option value="Junagadh">Junagadh</option>
  				<option value="rajkot">Rajkot</option>
 				<option value="Veraval">Veraval</option>
 				<option value="Baroda">Baroda</option>
 				<option value="Surat">Surat</option>
 				<option value="Keshod">Keshod</option>
 				<option value="Jamnagar">Jamnagar</option>
 
  		</select>
  	</td>
  </tr>

  <tr>
    <td><span style="color: red;">*   </span>Your Collage Name:</td>
    <td><input type="text" name="clg" required></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Branch:</td>
    <td><input type="text" name="branch" required></td>
  </tr>
  <tr>
    <td><span style="color: red;">*   </span>Your Sem:</td>
    <td><input type="text" name="sem" required></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center;"><input type="submit" name="submit"></td>
  </tr>

  
</table>

</form>
</body>
</html>
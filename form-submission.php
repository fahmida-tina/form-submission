<!-- Document -->
<!DOCTYPE html>
<!-- HTML root element -->
<html>
<!-- Head -->
<head>
	<title>Form Submission</title>
	</head>
	<body>
	
		<?php
		    $firstName = $lastName = "";
		    $firstNameErr = $lastNameErr = "";
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$Gender="";
			$err_Gender="";
			$Email="";
			$err_Email="";
			$Religion="";
			$err_Religion="";
			if($_SERVER['REQUEST_METHOD'] === "POST") {
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				if(empty($firstName)) 
				{
					$firstNameErr = "First name can not be empty!";
					$flag = true;
				}
				if(empty($lastName)) 
					{
						$lastNameErr = "Last name can not be empty!";
						$flag = true;
					}
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["uname"])){
					$err_uname="*Username is  Required*";
				}
				else if(strlen($_POST["uname"])<8){
					$err_uname="*Username should be at least 6 characters";
				}
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["password"])){
					$err_password="*Password  is Required in this field";
				}
				else{
					$password=$_POST["password"];
				}
				if (!isset($_POST["Gender"])){
                    $err_gender=   "Select a gender  ";
                }
				else{
					if (isset($Gender) && $Gender=="Male"){
						$gender=$_POST["Gender"];
					}
					else{
						if (isset($Gender) && $Gender=="Female"){
							$Gender=$_POST["Gender"];
						}
				    }
				}
				if(empty($_POST["Email"])){
                    $err_Email="this field is required";
                        
                    }
                }
				else {
                    $Email=$_POST["Email"];
                }
				if(empty($_POST["Religion"])){
					$err_Religion="Select ";
				}
				
				else{
					$Religion=$_POST["Religion"];
				}
			}
				
			

			
		?>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
		method="post">
	<from action="/action_page.php">
		<fieldset>
			<legend>Basic information:</legend>
	<br>
	<label for="firstName">First Name<span style="color: red;">*</span>: </label>
	<input type="text" name="firstName" id="firstName">
	<span style="color: red;"><?php echo $firstNameErr; ?></span>
	<br><br>
	<label for="lastName">Last Name<span style="color: red;">*</span>: </label>
	<input type="text" name="lastName" id="lastName">
	<span style="color: red;"><?php echo $lastNameErr; ?></span>
	<br><br>
	<label for="Religion">Religion<span style="color: red;">*</span>: </label>
	<select name="Religion">
		<option>Muslim</option>
		<option>Hindu</option>
		<option>Other</option>
	</select>
		<br><br>
		<label>Gender:<span style="color: red;">*</span>: </label>
		<td>:<input type="radio" value="<?php echo $Gender;?>" name="Gender">Male<input type="radio" value="<?php echo $Gender;?>" name="Gender">Female
			<span><?php echo $err_Gender;?></span>
			<br><br>
			<label for="dob">Enter your date of birth<span style="color: red;">*</span>: </label>
			<input type="text" id="dob" name="dob">
        <fieldset>
	        <legend>Contract information:</legend>
	 <br><br>
	<label for="Present Address">Present Address:</label>
	<textarea id="textarea" name="Present Address"></textarea>
	<br><br>
	<label for="Permanent Address">Permanent Address:</label>
	<textarea id="textarea" name="Permanent Address"></textarea>
	<br><br>
	<label for="lname">Email:<span style="color: red;">*</span>: </label>
	<input type="text" id="lname" name="lname">
	<br><br>
	<label for="lname">Phone:</label>
	<input type="text" id="lname" name="lname">
	<br>
	<fieldset>
	<legend>Account information:</legend>
	<form action="" method="post">
				<label><span User access: </span>:  
				<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
				<?php echo $err_uname;?><span style="color: red;">*</span>:
				<br><br>
				<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
				<?php echo $err_password;?><span style="color: red;">*</span>: 
				<br><br>
</form>
</body>
<br><br>
<input type="submit" name="submit" value="Register">
<br>
</html


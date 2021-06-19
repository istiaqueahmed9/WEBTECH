<?php 
            $name="";
            $err_name="";
            $email="";
            $err_email="";
            $birth="";
            $err_birth="";
            $gender="";
            $err_gender="";
            $where="";
            $err_where="";
            $degree="";
            $err_degree="";
			$bgroup="";
            $err_bgroup="";
			
			function ValidateEmail($email){
	 $pos_at = strpos($email, "@"); 
	 $pos_dot = strpos($email, ".", $pos_at+1); 
	 if($pos_at < $pos_dot) {
		 return true;
	 }
	 return false;
 }
	 
	 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 if(empty($_POST["email"])) {
		 $err_email= "Email Required";
	 }
elseif (!validateEmail($_POST["email"])){
	$err_email ='NOT A Valid email';
	
 }
 }
			

            if($_SERVER['REQUEST_METHOD']== "POST"){
                if(empty($_POST["name"])){
                    $err_name="Name is required";
                }
                else{
					$name=$_POST["name"];
				}
				
						
                if(empty($_POST["email"])){
					$err_email="Mail address required";
				}
				else{
					$email=$_POST["email"];
				}
				if (!isset($_POST["gender"])){
                    $err_Gender= "Select a gender";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
				
            }
		?> 
       <html>
			<head></head>
			<body>
			<form action="" method="POST">
			<fieldset>
			<legend><b> Registration</b></legend
				<table>
            	<tr>
					<td><span>Name</span></td>
                	<td>:<input type="text" name="name" value="<?php echo $name;?>">
                	<span><?php echo $err_name;?></span></td><br>
				
				    <t
				    <td><span>Email</span></td>
					<td>:<input type="text" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td><br>
				</tr>
                
                
                   
                <tr>
				<td><span>Birth Date</span></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
					
				</select>
				</td>
				</tr>

				<tr>
					<td><span><br>Gender</span></td>
					<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
					<span><?php echo $err_gender;?></span></td><br>
				</tr>
				
				
				<tr>
					<td><span>Blood Group</span></td>
					<td>
						:<select name="bgroup">
							<option disabled selected>Chose One</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							<option>O+</option>
							<option>O-</option>
						</select>
					</td>
					
					</tr>
					
				<tr>
					<td><span>Degree</span></td>
					<td>: 
					<input type="checkbox" value="SSC" name="ssc[]"> SSC 
					<input type="checkbox" value="HSC" name="hsc[]"> HSC 
					<input type="checkbox" value="BSC" name="bsc[]"> BSC 
					<input type="checkbox" value="MSC" name="msc[]"> MSC</br></td>
				</tr>
					
				</tr>
				
				
				</table>
				<br>
				<tr>
					<td><input type="Submit" name="Register" value="Register"></td>
				</tr>
				
			</table>
			 
		</form>
	</body>
</html>
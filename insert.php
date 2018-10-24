<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$dob=$_POST['birth'];
$gender=$_POST['gender'];
$area=$_POST['area'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($firstname)||!empty($lastname)|| !empty($dob)||!empty($gender) ||!empty($area)|| !empty($phone)||!empty($email)||!empty($password)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="guides";
	
	$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT= "SELECT email From registers Where email=? Limit 1";
		$INSERT ="INSERT Into registers(fname,lname,birth,gender,area,phone,email,password) VALUES(?,?,?,?,?,?,?,?)";
		
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		
		if($rnum==0)
		{
			$stmt->	close();
    $stmt= $conn->prepare($INSERT);
    $stmt->bind_param("sssssiss",$firstname,$lastname,$dob,$gender,$area,$phone,$email,$password);
    $stmt-> execute();
echo "New record is inserted successfully";
		}
		else{
			echo "someone already register using this email";
		}
		$stmt->close();
		 
	}

} else{
	echo" All fields are required";
	die();
	
}

?>
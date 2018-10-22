<? php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($firstname)||!empty($lastname)|| !empty($age)||!empty($gender)|| !empty($phone)||!empty($email)||!empty($password)){
	$host="local host";
	$dbUsername="root";
	$dbPassword="";
	$dbname="guides";
	
	$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT= "SELECT email From register Where email=? Limit 1";
		$INSERT ="INSERT Into register(fname,lname,age,gender,phone,email,password) values(?,?,?,?,?,?,?)";
		
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
    $stmt->bind_param("ssssii",$firstname,$lastname,$age,$gender,$phone,$email,$password);
    $stmt-> execute();
echo "New record is inserted successfully";
		}
		else{
			echo "someone already register using this email";
		}
		$stmt->close();
		$stmt->close();
	}

} else{
	echo" All fields are required";
	die();
}
?>
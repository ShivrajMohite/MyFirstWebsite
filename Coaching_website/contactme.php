<?php
echo "<div class='row'>";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "sankalp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database );

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	
	$query = 'Select * from contact';
	$result = mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($result)){
			print_r($row);
		}
		if(isset($_POST['submit']))
		{
			//echo($_POST['name']."<br/>\n");
			//echo($_POST['email']."<br/>\n");
			//echo($_POST['comment']."<br/>\n");
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comment = $_POST['comment'];
			
			echo $name;
			echo $email;
			echo $comment;
			
			$sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$comment')";
			$result = mysqli_query($conn,$sql);
			if($result){
				redirect("index.php")
			}
		}
echo "</div>";
?>
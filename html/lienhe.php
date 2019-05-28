<!DOCTYPE html>
<html>
<body>

 <?php
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

if (!empty($name) || !empty($email) || !empty($comments) ) {
	$host = 'localhost';
	$dbName = 'root';
	$dbPassword = '';
	$db = 'meo4';
	//tạo kết nối
	$conn = new mysqli ($host, $dbName, $dbPassword, $db);
	if (mysqli_connect_error()) {
		die('connect error('.mysqli_connect_error().')'. mysqli_connect_error());
	} else {
		$SELECT = "SELECT user_email From contact Where user_email=? Limit 1";
		$INSERT = "INSERT Into contact(user_name, user_email, content) values(?,?,?)";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param('s', $email);
		$stmt-> execute(); 
		$stmt-> bind_result($email);
		$stmt-> store_result();
		$rnum = $stmt->num_rows;

			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("sss", $name, $email, $comments);
			$stmt->execute();
			header('Location: ./lienhe.html');
		
		$stmt->close();
		$conn->close();
	}
} else {
	echo "all field are required";
	die();
}
?>
 
</body>
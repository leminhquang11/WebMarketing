<!DOCTYPE html>
<html>
<body>

 <?php
$mail = $_POST['mail'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
if (!empty($name) || !empty($mail) || !empty($phone) || !empty($address)) {
	$host = 'localhost';
	$dbName = 'root';
	$dbPassword = '';
	$db = 'meo4';
	//tạo kết nối
	$conn = new mysqli ($host, $dbName, $dbPassword, $db);
	if (mysqli_connect_error()) {
		die('connect error('.mysqli_connect_error().')'. mysqli_connect_error());
	} else {
		$SELECT = "SELECT email From user Where email=? Limit 1";
		$INSERT = "INSERT Into user(name, email, phone, address) values(?,?,?,?)";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param('s', $mail);
		$stmt-> execute(); 
		$stmt-> bind_result($mail);
		$stmt-> store_result();
		$rnum = $stmt->num_rows;

		
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssds", $name, $mail, $phone, $address);
			$stmt->execute();
			header('Location: ./thongtinthanhtoan.html');
		
		$stmt->close();
		$conn->close();
	}
} else {
	echo "all field are required";
	die();
}
?>
 
</body>
</html>
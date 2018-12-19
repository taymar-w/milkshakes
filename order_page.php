<!DOCTYPE html>
<html>
<title>Orders</title>
<?php include 'index.php'; ?>



<h1> Your Order </h1>



<body style = "background-color: pink;">
<?php
$conn = OpenCon();
 function show_date(){
    return date('l, jS F H:i');
	
  }

$firstname = isset($_POST['firstname'])? $_POST['firstname']:'';
$lastname = isset($_POST['lastname'])? $_POST['lastname']:'';
$email = isset($_POST['email'])? $_POST['email']:'';
$phone = isset($_POST['phone'])? $_POST['phone']:'';
$homeaddress = isset($_POST['home'])? $_POST['home']:'';
$date = show_date();

$flavor = isset($_POST['flavor'])? $_POST['flavor']:'';
$topping = isset($_POST['topping'])? $_POST['topping']:'';
$size = isset($_POST['size'])? $_POST['size']:'';
$name = $firstname." ".$lastname;
$milkshake = $size." ".$flavor." milkshake topped with ".$topping;

 echo "Name: ".$name."<br>" ;
 
 echo "Order: ".$milkshake."<br><br>";
 echo "Email: ".$email."<br>";
 echo "Phone: ".$phone."<br>";
 echo "Date and Time: ".$date." (army time)<br>";
 
 $sqli = "INSERT INTO milkshakeorders (customer_name,milkshake,email,homeAddress,phone_num,order_date) VALUES ('$name','$milkshake','$email','$homeaddress','$phone','$date')";
 

if ($conn->query($sqli) === TRUE) {
    echo "<br>Your order has been placed successfully!<br>";
} else {
    echo "Error: " . $sqli . "<br>" . $conn->error;
}
	


 CloseCon($conn);

 ?><br>
</body>

</html>
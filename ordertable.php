<!DOCTYPE html>
<html>
<h1 style = "font-size:60px;">Order History</h1>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 100%;    
  background-color: pink;
}
</style>

<table id = "t01"; >
  <tr>
    <th>Name</th>
	<th>Milkshake</th>
	<th>Email</th>
	<th>Address</th>
	<th>Phone Number</th>
	<th>Date Ordered</th>
  </tr>
  
<?php include 'index.php';
$conn = OpenCon();
$firstname = isset($_POST['firstname'])? $_POST['firstname']:'';
$lastname = isset($_POST['lastname'])? $_POST['lastname']:'';
$email = isset($_POST['email'])? $_POST['email']:'';
$phone = isset($_POST['phone'])? $_POST['phone']:'';
$homeaddress = isset($_POST['home'])? $_POST['home']:'';


$flavor = isset($_POST['flavor'])? $_POST['flavor']:'';
$topping = isset($_POST['topping'])? $_POST['topping']:'';
$size = isset($_POST['size'])? $_POST['size']:'';

$name = $firstname." ".$lastname;
$milkshake = $size." ".$flavor." milkshake topped with ".$topping;

//$result = mysqli_query($conn, "ALTER TABLE milkshakeorders ADD COLUMN order_date char(50)");
$result = mysqli_query($conn, "SELECT * FROM milkshakeorders");
$rownum = mysqli_num_rows($result);

  function show_date(){
    return date('l, jS F H:i');
	
  }

if ($rownum > 0) {
    // outputs data of each row
    while($row = $result->fetch_assoc()) {
		
     echo  "<tr><td>".$row['customer_name']. "</td><td>".$row['milkshake']."</td><td>".$row['email']. 
	 "</td><td>".$row['homeAddress']."</td><td>".$row['phone_num']."</td><td>".show_date(). "</td></tr>";
	 //echo "<td>" . $row['flavor']. " </td><td>" . $row['topping']."</td><td>".$row['order_size']. "</td>";
	  
	
	
    }
} else {
    echo "0 results";
}
 CloseCon($conn);





?></html>
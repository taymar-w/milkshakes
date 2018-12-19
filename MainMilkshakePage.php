<!DOCTYPE html>
<html>
<title>Milkshakes.com Homepage</title>
<style>
div, a, ul,{
	border: 3px solid blue;
  padding: 30px;
}
h1{background-image:url('milkshake.jpg'); font-size:100px;}
</style>


<body style="background-color: pink;">
<h1> 

<br>
MILKSHAKES.COM 
<br>

</h1>
<?php include 'menu.php'; ?> 


  
 <form action = "order_page.php" action ="ordertable.php"  method = "post">
 <h2>
 <br>
 ORDER HERE!
 </h2>
 <div>
 <ul>FLAVORS</ul>
 <input type = "radio" name ="flavor" value= "chocolate" checked> Chocolate <br>
 <input type = "radio" name ="flavor" value= "peanut butter "> Peanut Butter <br>
 <input type = "radio" name ="flavor" value= "vanilla"> Vanilla <br>
 <input type = "radio" name ="flavor" value= "strawberry"> Strawberry <br>
 <input type = "radio" name ="flavor" value= "oreo"> Oreo <br>
 <input type = "radio" name ="flavor" value= "pumpkin pie"> Pumpkin Pie <br>
  </div>
  <div>
 <ul>TOPPINGS</ul>
 <input type = "radio" name ="topping" value= "no topping" checked>No Topping<br>
 <input type = "radio" name ="topping" value= "whipped cream and a cherry on top">Whipped cream and a cherry on top<br>
 <input type = "radio" name ="topping" value= "whipped cream">Whipped cream<br>
 <input type = "radio" name ="topping" value= "Cookie crumbles">Cookie Crumbles<br>
 </div>
 <div>
 <ul>SIZE</ul>
 <input type = "radio" name ="size" value= "small" checked>Small<br>
 <input type = "radio" name ="size" value= "medium ">Medium<br>
 <input type = "radio" name ="size" value= "large">Large<br><br>
  </div> 
  First name:<br>
  <input type="text" name="firstname" required><br>
  
  Last name:<br>
  <input type="text" name="lastname" required><br>
  
  Email Address:<br>
  <input type="text" name="email" required><br>
  
  Home Address:<br>
  <input type="text" name="home" required><br>
  
  Phone Number:<br>
  <input type="text" name="phone" required><br>
  
 
  
 <input type="submit" value="Place Order"> <input type="reset">
 
 
 </form> 
</body>
</html>
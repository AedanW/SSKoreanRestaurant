<?php
session_start();
// Check to see if the current access has been authorized
//if ($_COOKIE["auth"] == session_id()) {
  if (filter_input (INPUT_COOKIE, 'auth') == session_id()) {
	$display_block = "<p>You are an authorized user.</p>";
} else {
	//redirect back to login form if not authorized
	header("Location: userlogin.html");
	exit;
}
$mysqli = mysqli_connect("localhost", "SSKoreanAdmin", "letmein", "SSKoreanRestaurant");
$sql = "SELECT * FROM Menu";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
?>

<html>
<head>
<title>Secret Page</title>
</head>
<body>
            <header style=\"text-align: right\"> <a href=\"logout.php\">
          <img src=\"greenlogout.png\" alt=\"Logout\" width=\"65\" height=\"25\"></img></a></header>
<div style="background-color:lightblue; width:40%; height:650px; float: left">
    <form method ="post", action ='ConfirmOrder.php' target="menuFrame">
    <table> <tr >
            <th>Item Number</th>
            <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                </tr>
                <?php
                
                
                while ($MenuItem = mysqli_fetch_array($result)){
            $Name = $MenuItem['ItemName'];
            $Price = $MenuItem['Price'];
            ##Key = ID and Value = Price
            $ItemList[$Name] = $Price;
            
             echo "<tr> <td> $ID </td> <td> $Name </td> <td> $Price</td> <td><input type = 'text'  name = $Name onkeypress='return event.charCode >= 48 && event.charCode <= 57'> </td> </tr>";
}
    
?>  
                
           
                </br>         
                <input type="submit" name="order" value="Order Now"/>

     <form/>
                
              
                
        
       
                
    </table>
</div>
<div style="background-color:lightblue; width:60%; height:650px; float:right">
    <iframe name="menuFrame" src="Menu.jpg" width=100% height=650 ></iframe>
</div>
</body>
</html>

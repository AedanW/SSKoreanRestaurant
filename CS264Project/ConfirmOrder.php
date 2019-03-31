<html>
<head>
<title>Final Price</title>
</head>
<body>
    <h1><b><u> Your Final Order </u></b></h1>
    <br>
<?php
session_start();
$mysqli = mysqli_connect("localhost", "SSKoreanAdmin", "letmein", "SSKoreanRestaurant");
$sql = "SELECT * FROM Menu";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
$OrderString = " ";
$OrderPrice = 0.00;
$OrderPriceString = " ";
while ($MenuItem = mysqli_fetch_array($result)){
    $Name = $MenuItem['ItemName'];
    $Price = $MenuItem['Price'];
    $ID = $MenuItem['ItemID'];
    if($Item = filter_input(INPUT_POST, $Name)){
        $OrderPrice = (float)$OrderPrice + ((int)$Item *(float)$Price);
        $OrderString = "$OrderString $Name x $Item <br>";
        $OrderPriceString = "$OrderPriceString $ $Price x $Item <br>                 +<br>";
    }
    
}
$Order = array($OrderPrice,$OrderString);
echo "<p> $OrderString </p>";
echo '<br><br><br>';
echo '<h1><b><u> Total Price </u></b></h1><br>';
echo "<p>$OrderPriceString</p>";
echo "<p>------------------- </p><br>";
echo "<p>$ $OrderPrice</p> <br>";
echo "<form method = 'post' action = 'SendOrder.php >"
. "<p><input type='submit' name='SendOrder' value = $Order></p>"
        . "</form>"
?>
    
    

    
    

</body>
</html>


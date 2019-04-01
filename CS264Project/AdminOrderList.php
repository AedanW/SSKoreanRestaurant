<!DOCTYPE html>
<html>
<head>
<style>
.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
    <form method = 'post' action = AdminOrderList.php>
    <?php
    
$mysqli = mysqli_connect("localhost", "SSKoreanAdmin", "letmein", "SSKoreanResaturant");
$sql = 'SELECT * FROM `Orders`;';
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
echo "<table> <tr >
            <th>Order ID</th>
            <th>Order String</th>
                <th>Order Price</th>
                <th>Comlpete Order</th>
                </tr>
";
    if (mysqli_num_rows($result)< 1){
           echo '<p> No Orders</p>';
    }else{
        while ($OrderList = mysqli_fetch_array($result)){
            $OrderID = $students_list['student_name'];
            $OrderPrice = $students_list['student_id'];
            $OrderString = $students_list['grade_average'];

        
         echo "<tr> <td> $OrderID</td> <td> $OrderString/td> <td> $ $OrderPrice</td> <td><button type='submit' name = 'DeletedItem' form='DeleteForm' value='$OrderID'>Submit</button></td> </tr>";
}
    }

?>
    </form>
 </table>
</body>
</html>

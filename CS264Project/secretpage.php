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
?>

<html>
<head>
<title>Secret Page</title>
</head>
<body>
<header style="text-align: right"> <a href="logout.php">
          <img src="greenlogout.png" alt="Logout" width="65" height="25"></img></a></header>
<?php echo "<body style='background-color:bisque'>".
        "$display_block"."</body>"; ?>
</body>
</html>

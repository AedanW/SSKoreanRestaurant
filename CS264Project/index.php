<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: red;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  border-radius:12px 12px 12px 12px;
}

li a:hover:not(.active) {
  background-color: #FEDD21;
  color: black
}

.active {
  background-color: black;
}
</style>
</head>
<body>
  <div style="background-color:red;">
    <img src="logo1.png" alt="logo", style = "display: block; margin-left: auto; margin-right:auto"></img>
  </div>
<ul style="text-align:center">
  <li><a class="active" href="start.html"  target="myframe">SS Korean Restaurant</a></li>
  <li><a href="Menu.html" target="myframe">Menu</a></li>
  <li><a href="contact.html" target="myframe">Contact</a></li>
  <li><a href="about.html" target="myframe">About</a></li>
  <li><a href="userlogin.html" target="_blank">Log in and order now</li>
</ul>
<br style="clear:left">


<div style=" width:100%; height:650px; float:left">
    <iframe name="myframe" src="start.html" width=100% height=650 ></iframe>
</div>
<br style="clear:left">

</body>
</html>

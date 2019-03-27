<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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
  border-radius:12px 12px 0px 0px;
}

li a:hover:not(.active) {
  background-color: blue;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#home" >Home</a></li>
  <li><a href="https://www.tsn.ca" target="myframe">Sports</a></li>
  <li><a href="contact.html" target="myframe">Contact</a></li>
  <li><a href="about.html" target="myframe">About</a></li>
  <li><a href="userlogin.html" target="_blank">Member Login</li>
</ul>
<br style="clear:left">

<div style="background-color:lightyellow; width:50%; height:650px; float:left">
<h2>Welcome to my home page!!</h2>
</div>

<div style="background-color:lightblue; width:50%; height:650px; float:left">
<iframe name="myframe" src="https://www.castanet.net" width=100% height=650 ></iframe>
</div>
<br style="clear:left">

</body>
</html>

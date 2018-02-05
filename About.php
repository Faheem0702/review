<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
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
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #ed7b81;
}
</style>
</head>
<body background="bg.jpg">

<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a class="active" href="About.php">About</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<center><h1>Heading</h1></center>
<p>Write Content on About.php File</p>
</body>
</html>


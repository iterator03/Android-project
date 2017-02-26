<style>
body
{
	background:linear-gradient(yellow,pink,grey,orange);
}
button{
	float:right;
	padding:5px;
	margin-right:20px;
}
h1{
	text-align:center;
	color:red;
	letter-spacing:1px;text-decoration:overline;
}
#header{position:fixed;
	top:5px;
	width:100%;
	height:120px;
	background:linear-gradient(to left,skyblue,limegreen,cyan);
}
#msg{
	position:fixed;
	top:250px;
	left:450px;
	text-shadow:1px 1px 1px;
	transition:all 3s;
}
h3{
	transform:rotateX(2turn),scale(1.2,1.2);
	transition:all 3s;
	visibility:hidden;
}
#footer{
	position:fixed;
	bottom:10px;
	width:100%;
	height:120px;
	text-align:center;
	color:blue;
	background:linear-gradient(to left,skyblue,limegreen,cyan);
}
a{text-decoration:none;text-shadow:1px 1px 1px;}

</style>
<div id="header">
<h1>
IT'S A HOMEPAGE</h1>
<button><a href="reg.php">REGISTER</button>
<button><a href="log.php">LOGIN</button></div>
<div id="msg"><?php
echo"<h3>YOU HAVE BEEN SUCCESFULY REGISTERED</h3>";
?></div>
<div id="footer">
<h2>ITS HOLDS INFORMATION</h2></div>
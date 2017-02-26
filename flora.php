<!doctype html>
<html>
<head>
<title>FLORA</title>
<link href="flora.css" rel="stylesheet"/>
<style>
iframe{
position:relative;
left:300px;
top:210px;
frameborder="0";
z-index:1;
}
ul#f1>li ul.sec
{
display:none;
float:none;padding:4px;
margin-left:-38px;
height:auto;}
ul#f1>li ul.sec>li
{
padding: 7px;
color: sandybrown;}
ul#f1>li:hover ul{
display:block;}
ul.sec li{border-radius:0px;
padding:0px;
font-family:cursive;
color:white;
}
ul#f1>li ul.sec li ul.third{
	display:none;
	color:white;
}
ul#f1>li ul.sec li ul.third li
{
	color:aquamarine;
	padding:4px;}
ul#f1>li ul.sec li:hover ul{display:block;}
</style>
<script>
var r;var i=0;
var counter=0;
function show()
{
r=document.getElementById("hide");
r.style.display="block";
d=document.getElementById("show");
d.style.display="none";
}
function change_theme(){
document.getElementById("footer").style.backgroundImage="url('pics/cover8.jpg')";
//document.getElementById("r1").style.background="linear-gradient(to right,#8a2be2,#e3dac9,#8a2be2)";
document.body.style.backgroundImage="url('pics/cover8.jpg')";
document.getElementById("header").style.background="linear-gradient(#8a2be2,#21abcd,#9966cc)";
document.getElementById("flora").style.color="aquamarine";//document.getElementById("r1").style.backgroundImage="url(pics/cover6.jpg)";
document.getElementById("r1").style.backgroundSize="cover";
document.getElementById("flora").style.backgroundImage="url(pics/cover6.jpg)";
document.getElementById("flora").style.backgroundSize="cover";
document.getElementById("r1").style.color="#ff2052";
document.getElementById("r1").style.textDecoration="underline";
document.getElementById("heading").style.color="red";
document.getElementById("menu").style.background="linear-gradient(to left,#f2f3f4,purple,#f2f3f4)";
document.body.style.background="linear-gradient(to right,#8a2be2,#e3dac9,#8a2be2)";
document.getElementById("change").style.display="none";
document.getElementById("show").style.background="#8a2be2";
document.getElementById("show").style.color="#e3dac9";
var m=document.getElementsByClassName("col");
{m[counter].style.background="#8a2be2";
m[counter].style.color="#e3dac9";}
counter++;
m[counter].style.background="#8a2be2";
m[counter].style.color="#e3dac9";
counter++;
m[counter].style.background="#8a2be2";
m[counter].style.color="#e3dac9";
counter++;m[counter].style.background="#8a2be2";
m[counter].style.color="#e3dac9";
counter++;m[counter].style.background="#8a2be2";
m[counter].style.color="#e3dac9";
counter++;
var v=document.getElementsByClassName("view");
while(i<v.length)
{v[i].style.color="black";
i++;}
}
</script>
</head>
<body>
<div id="header">
<div id="logo">
<img src="pics/logo.jpg" alt="logo"/><h2 id="heading">FLORA</h2><p>when words are not enough</p>
</div>
<div id="side">
<ul>
<li><a href="flora_login.php" target="tryit">SIGN IN</a></li>
<li><a href="flora_reg.php">REGISTER</a></li>
<li><a href="track_order.php">TRACK ORDER</a></li>
</ul>
<br/>
<br/>
<br/><div id="search">
<input type="text" placeholder="Search"/><div id="search123"><img src="pics/search.png" width="25px" height="20px"/></div>
&nbsp; &nbsp; &nbsp;</div>
<div id="cart"><img src="pics/carts.jpg" width="40px" height="30px"/>CART</div>
</div>
</div>
<div id="menu">
<ul id="f1">
<li>FLOWERS
<ul class="sec">
<li>By Price<ul class="third"><li>Under 600</li><li>600 To 1000</li><li>1000 To 2000</li><li>Above 2000</li></ul>
<li>By Type<ul class="third"><li>Roses</li><li>Carnations</li><li>Gerberas</li><li>Lilies</li><li>Orchids</li><li>Mixed Flowers</li></ul></li>
<li>By Color<ul class="third"><li>Red Flowers</li><li>Pink Flowers</li><li> Flowers</li><li>Yellow Flowers</li><li>Mixed Flowers</li></ul></li>
<li>Important Links<ul class="third"><li>Chocolate Bouquets</li><li>Flowers & Teddies</li><li>Flower Combos</li><li>Precious Flowers</li><li>All Flowers</li></ul></li></ul></li>
<li>CAKE
<ul class="sec"><li>Delicious Cakes</li><li>Eggless Cakes</li><li>5 Star Cakes</li><li>Themed Cakes</li><li>Birthday Cakes</li><li>All Cakes</li></ul></li>
<li>GIFT
<ul class="sec"><li>Teddy House</li><li>Mugs</li><li>Precious Flowers</li><li>Chocolates</li><li>Divine Collection</li><li>Other</li><li>All Gifts</li></ul>
</li>
<li>BY OCASSION<ul class="sec"><li>Fathers Day</li><li>Anniversary</li><li>Birthday</li><li>Appreciation</li><li>Get Well Soon</li><li>I Am Sorry</li><li>Mothers Day</li><li>Congratulations</li><li>New Born</li><li>Thank You</li></ul>
</li><li>COMBOS<ul class="sec"><li>Friends</li><li>Family</li><li>Love</li><li>Affection</li><li>Colleages</li></ul></li></ul>
</div>
<hr/>
<button style="align:left;position:relative;top:-200px;margin:-25px;" id="change" onclick="change_theme()">CHANGE THEME</button>
<iframe src="slider3_radio.php" height="400px" width="615px" scrolling="no">
</iframe>
<div id="container" name="tryit">
<hr/>
<br/>
<br/>
<h2 style="text-align:center;background-image:url('pics/cover2.jpg');background-size:'cover';margin-left:-40px;padding-left:30px;color:#ff2052;" id="r1">SEND FLOWERS TO YOUR LOVED ONES..</h2>
<div class="flowers">
<img src="pics/43.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/20.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/Joy-To-The-World.jpg"/>
<a href="" class="view">VIEW</a>
<a href="#" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/Caring-Heart.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f10.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f9.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f8.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f7.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f6.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f5.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f4.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/f3.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<br/>
</div>
<br/>
<br/>
<pre><button onclick="show()" id="show">MORE</button></pre>
<div id="hide">
<div class="flowers">
<img src="pics/f2.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div><div class="flowers">
<img src="pics/fresh-start.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>

<div class="flowers"><img src="pics/love-express.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>

<div class="flowers"><img src="pics/love-messenger.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div><div class="flowers">
<img src="pics/pic_613.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div><div class="flowers">
<img src="pics/passion-love.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div><div class="flowers">
<img src="pics/f1.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/product-03.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
<div class="flowers">
<img src="pics/Choco-Delight.jpg"/>
<a href="" class="view">VIEW</a>
<a href="" class="link">Add to Cart</a></div>
</div></div>
<br/>
<br/>
<hr/>
<div><p id="back-top"><a href="#top"><span id="button"></span><span id="link">back to top</span></a></p></div>
<div id="footer">
<table id="t">
<tr><td>
<ul><h3>SEND FLOWERS TO</h3>
<li>Ahmedabad</li>
<li>Bangalore</li> 
<li>Bhopal</li><li>Chandigarh</li><li>Chennai</li><li>Coimbatore</li><li>Delhi</li><li>Gurgaon</li></ul></td>
<td rowspan="2"><ul><li>Kolkata</li><li>Lucknow</li><li>Mumbai</li><li>Nagpur</li><li>Pune</li><li>All Other Cities</li>
</ul></td>
<td><ul> 
<h3>CAKE DELIVERY IN</h3>
<li>Ahmedabad</li>
<li>Bangalore</li> 
<li>Bhopal</li><li>Chandigarh</li><li>Chennai</li><li>Coimbatore</li><li>Delhi</li><li>Gurgaon</li><li>Hyderabad</li><li>Kolkata</li><li>Lucknow</li><li>Mumbai</li><li>Nagpur</li><li>Pune</li><li>All Other Cities</li>
</ul></td>
</tr>
<tr>
<ul><h2 id="flora">FLORA</h2>
<li><a href="abo.php">About Us</a></li><li><a href="">Blog</a></li><li><a href="">Coupons & Deals</a></li><li><a href="">Career</a></li><li><a href="">Press Release</a></li></ul></td></tr>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pics/Love-express.jpg"/></tr>
</table>
<div id="foot">
<button class="col">Need Help?</button>
<button class="col">CONTACT US</button>
<button class="col">Terms & Conditions</button><button class="col">Privacy Policy</button><button class="col">Cancellation & Refund</button></div>
</div>
<div id="add">COPYRIGHTS&copy;FLORA.COM  ALL RIGHTS ARE RESERVED.</div>
</body></html>
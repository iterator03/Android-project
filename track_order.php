<style>
#box{
	margin:0px auto;
	border:2px inset pink;
	width:50%;
	height:280px;
	background:whitesmoke;
	color:burlywood;
	text-shadow:0.8px 0.8px 0.8px;
	letter-spacing:0.7px;
}
#caption{
	background:#872657;
	padding:5px;
	text-align:center;
	text-shadow:1px 1px 1px blue;
}
button#t{
	position:relative;
	left:490px;color:whitesmoke;
	background:#0a0b2d;
	padding:6px;
	text-shadow:1px 1px 1px;
}
h3#ord{
	letter-spacing:0.8px;
	background:#2f4f4f;
	padding:6px;
}
#track{
	background:whitesmoke;
}
label::after
{content:":";}
</style>
<div id="box">
<a href="flora.php" style="margin:10px">BACK TO HOME</a>
<h3 id="ord" align="center">Track your order for enjoying best services</h3>
<div id="track">
<table cellspacing="10px" align="center"><form>
<h3 id="caption">TRACK ORDER</h3>
<hr/>
<tr><td><label for="order">Enter Order No.</label></td>
<td colspan="3"><input type="number" name="order" id="order" required/></td>
</tr>
<br/>
<tr><td><label for="eml">Enter Email No.</label></td>
<td><input type="email" name="eml" id="eml" required/></tr>
</form></table>
<button id="t">TRACK ORDER</button>
</div>
</div>
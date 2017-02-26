<head><link href="flora_reg.css" rel="stylesheet"/>
<Script>
				function open_popup()
				{
		
	document.getElementById("reg").style.display="block";
				}
				function popup_close()
				{
	document.getElementById("reg").style.display="none";
		}
				
		</script></head>
<div id="reg">
<div id="reg_popup" class="main_popup">
<div class="s5">
<img class="crs" src="pics/icon/cross2.png" onclick="popup_close()"/>
<ul>
<li class="active">SIGN UP</li>
<li class="noactive">Already a member?<a href="tryz.php" style="color:whitesmoke;padding:14px;">Sign in</a></li>
</ul>

</div>
<div id="login_register_container">
<div class="main_login"><p class="login_msg">JOIN US ON</p>
<div class="social"><button style="bakground:red;">GOOGLE+</button><button style="background:blue;">FACEBOOK</button></div>
<div class="login_separator"><p>We will not post anything on your wall</p>
<hr/>
</div>
<div id="error_msg"></div>
<div id="registry">
<form method="post" action="r_handler1.php">
<table cellspacing="10px" cellpadding="8px">
<tr><td><label for="name">NAME</td><td colspan="3"><input type="text"id="name" name="name"/></td></tr>
<tr><td><label for="eml">EMAIL</td><td colspan="3"><input type="email" id="eml" name="eml"/></td></tr>
<tr><td><label for="ps">PASSWORD</td><td colspan="3"><input type="password" id="pass" name="pass"/></td></tr>
</table>
</div>
<button value="register" name="register">REGISTER</button></form>
</div></div>
<!--<div id="register_benefits">
<h3><u>Benefits of signup</u></h3>
<ul><li> Set Reminders (Never Miss an Occasion)</li>
<li>Fast Checkout (Save 50% time)</li>
<li> Enrol to FA Points</li>
<li>Access to Exclusive Offers</li></ul>
</div>--></div></div>
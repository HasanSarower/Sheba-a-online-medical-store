<html>
<head>
		<title>Registration</title>
	</head>
<body>
	<table border=1 height=600 width=100%>
		<tr height=100>
		
			<td  align="right">
				<img src="" align="left"/>
				<a href="Home.html"><u>Home</u></a>
				<a href="Login.html"><u>Login</u></a>
				<a href="reg.html"><u>Registration</u></a>
			</td>
		</tr>
		
		<tr>
			<td>
				<form method="post">
					<fieldset>
						<legend>REGISTRATION</legend>
						<table height="200" width="30%">
							<tr>
								<td>Name</td>
								<td>:<input name="name"/></td>
							</tr>
							
							
							<tr>
								<td>Email</td>
								<td>:<input name="email"/></td>
							</tr>
							
							<tr>
								<td>User Name</td>
								<td>:<input name="uname"/></td>
							</tr>
							
							<tr>
								<td>Password</td>
								<td>:<input type="password" name="pass"/></td>
							</tr>
							
							<tr>
								<td>Confirm Password</td>
								<td>:<input type="password" name="cpass"/></td>
							</tr>
							</table>
							<table>
							<tr>
								<fieldset>
									<legend>Gender</legend>
										<input name="gender" type="radio" value="Male">Male
										<input name="gender" type="radio"  value="Female">Female
										<input name="gender" type="radio"  value="Other">Other
								</fieldset>
							</tr>
							</table>
						<hr>
						<input type="checkbox" name="reminder"/>Remember me<br/>
						<input type="submit"/><a href="Change pass.html">Forgot Password?<a/>
					</fieldset>
				</form>
			</td>
		</tr>
		
		<tr height=40 align="center">
			<td>Copyrignt @ 2017</td>
		</tr>
	</table>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	$cpass=$_REQUEST['cpass'];
	$gender=$_REQUEST['gender'];
	$v=true;
	
	
		if($name=="")
		{
			echo "Name is required.<br/>";
			$v=false;
		}
		else if(strlen($name)<2)
		{
			
			echo "Name size is too small!!<br/>";
			$v=false;
		}			
		for($i=0;$i<strlen($name);$i++)
		{
			if(($name[$i]>="A" && $name[$i]<="Z") ||($name[$i]>="a" && $name[$i]<="z") || $name[$i]=="-" || $name[$i]=="_" || ($name[$i]>='0' && $name[$i]<='9'))
			{
			}
			else
			{
				echo "Contain Invalid characters!!!<br/>";
				$v=false;
				break;
			}
			
		}
		if($v==true)
		{
			echo "Name:".$name."<br/>";
		}
		
		
		
		if($email=="")
		{
			echo "Email is required.<br/>";
			$v=false;
		}
		else
		{
			$x=explode("@",$email);
			$y=explode(".",$x[1]);
			if(count($x)!=2)
			{
				$v=false;
				echo "Invalid Email Address!!!<br/>";
				//echo count($x);
			}
			else if($x[0]=="" || $x[1]=="")
			{
				$v=false;
				echo "Invalid Email Address!!!<br/>";
			}
			
			else if($y[0]=="" || $y[1]=="")
			{
				$v=false;
				echo "Invalid Email Address!!!<br/>";
			}
			
		}
		if($v==true)
		{
			echo "Email:".$email."<br/>";
		}
		
		
		if($uname=="")
		{
			echo "UserName is required.<br/>";
			$v=false;
		}
		else if(strlen($uname)<2)
		{
			
			echo "UserName size is too small.<br/>";
			$v=false;
		}	
		if($v==true)
		{
			echo "UserName:".$uname."<br/>";
		}
		
		
		if($pass=="")
		{
			$v=false;
			echo "Password is required.<br/>";
		}
		else if($pass!=$cpass)
		{
			$v=false;
			echo "Password not matched!!!<br/>";
		}
		if($v==true)
		{
			echo "Password:".$pass."<br/>";
		}
		
		
		if($gender=="")
		{
			$v=false;
			echo "Please select any one Gender.<br/>";
		}
		if($v==true)
		{
			echo "Gender:".$gender."<br/>";
			
		}
		
		
		
		if($v==true)
		{
			echo "Successfully Registered.<br/>";
			
			$f=fopen("userdb.txt","a");
			$x="$name,$email,$uname,$pass,$gender,deafult.PNG,/0\n";
			fwrite($f,$x);
			fclose($f);
		}
}
?>
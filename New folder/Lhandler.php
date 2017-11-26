<?php
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	$e=true;
	if($uname=="")
	{
		echo "Fill the user name<br/>";
	}
	
	else
	{	
		$f=fopen("userdb.txt","r");
		while(!feof($f))
		{
			$row=explode(",",fgets($f));
			if($row[2]==$uname)
			{
				$e=true;
				if($row[3]==$pass)
				{
					session_start();
					$_SESSION['uname'] = $uname;
					
					
					header("location: index.html");
				}
				else
				{
					echo "Wrong password!!!<br/>";
				}
				break;
			}
			else
			{
				$e=false;
			}
			
		}
	}
	if($e==false)
	{
		echo "Id not found!!!<br/>";
	}
	
?>
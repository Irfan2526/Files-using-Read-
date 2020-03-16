<?php
//I am using the fread function
if(isset($_POST['fread']))
{
	$abc="Jmi.txt";
	if(file_exists($abc))
	{
		$hello = fopen($abc,"r");
		$data = fread($hello,filesize($abc));
		$to=$_POST['email'];
		$subject="Using Fread Function";
		$message="Hii! You are using the fread Function.";
		$email1=mail($to,$subject,$message);
		if($email1 == true)
		{
		echo "Success! Please Check Your Email Id"."<br>";
		}
		fclose($hello);
		echo $data;	
	}


}
//I am using the Read function
if(isset($_POST['Readfile']))
{
	$abc1="Read.txt";
	if(file_exists($abc1))
	{
		$data1=readfile($abc1)."<br>";
		$to1=$_POST['email'];
		$subject1="Using Read File Function";
		$message1="Hii! You are using the Read File Function.";
		$email2=mail($to1,$subject1,$message1);
		if($email2 == true)
		{
		echo "Success! Please Check Your Email Id";
		}
		
			
	}


}
//I am using the FILE function
if(isset($_POST['File']))
{
	$file="File.txt";
	if(file_exists($file))
	{
		$arr = file($file); 
		foreach($arr as $line)
		 { 
		 	echo $line; 
		 }
		$to2=$_POST['email'];
		$subject2=" Hii! You are Using the File Function";
		$message2="Hii! You are using the File Function.";
		$email3=mail($to2,$subject2,$message2);
		if($email3 == true)
		{
		echo "Success! Please Check Your Email Id";
		}
		
			
	}
}
//I am using the FILE get contents function
if(isset($_POST['filegetcontents']))
{
	$file1="fileget.txt";
	if(file_exists($file1)){
		$content = file_get_contents($file1);
		$to3=$_POST['email'];
		$subject3=" Hii! You are Using the File Function";
		$message3="Hii! You are using the File Function.";
		$email4=mail($to3,$subject3,$message3);
		if($email4 == true)
		{
		echo "Success! Please Check Your Email Id"."<br>";
		}
       echo $content;
	}
}


?>
<!DOCTYPE html>
<html lang="us-en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h2>Hii! You are Using the Read Mode</h2>
	<form method="POST" action="">
		<p><b>Email id:</b><input type="email" name="email" placeholder="Please Enter your Email id" required></p>
		<p>
			<input type="submit" name="fread" value="Fread">
			<input type="submit" name="Readfile" value="Read File">
			<input type="submit" name="File" value="File">
			<input type="submit" name="filegetcontents" value="File_get_contents">
		</p>
	</form>
</center>
	</body>
	</html>
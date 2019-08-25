<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$flag = 1;
if (isset($_POST['submit']))
{

   if(empty($_POST["name"]))
     {
		$nameErr = "Name is required";
		$flag = 0;
	 }
   
   if (empty($_POST["email"]))
     {$emailErr = "Email is required";
	$flag = 0;
	}
  
   
  
   if (empty($_POST["gender"]))
     {$genderErr = "Gender is required";
	$flag = 0;
	}
  

  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['website']))
       {
       $websiteErr = "Invalid URL"; 
       }





  if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST['email']))
       {
       $emailErr = "Invalid email format";
		$flag = 0;	   
       }



  if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name']))
       {
       $nameErr = "Only letters and white space allowed";
	   $flag = 0;
       }

if($flag == 1)
	{
		echo "write database code ";
	}
else
	{
		echo "pls. check for all validations";
	}


}


?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="#"> 
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?> </span>
   <br><br>

   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>


</body>
</html>
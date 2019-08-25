<form method=post enctype="multipart/form-data"    >
<input type=file name="f1" >
<input type=submit name=submit>

</form>

<?php

if(isset($_POST['submit']))
{
	print_r($_FILES['f1']);
	
	
	$a = explode(".", $_FILES['f1']['name']);
	$ext = end($a);
	echo $ext;
	$ext1 = array('jpg', 'png', 'bmp');
	if(in_array($ext, $ext1))
	{
		$r = move_uploaded_file($_FILES['f1']['tmp_name'], $_FILES['f1']['name']);
	
	}
	else
	{
		echo "invalid file type";
		die();
		
	}
	
	echo "database code ";
	
	
}




?>
<script type="text/javascript">
function validate()
{
var no = /^[0-9]*$/ ; 
var name = /^[a-zA-Z]*$/ ;
      if(!document.doc.no.value.match(no))  
      	{  
			alert('Please input only numeric characters'); 
	   		document.doc.no.focus();
	   		return false;
	   }
	    if(!document.doc.name.value.match(name))  
      	{  
			alert('Please input only characters'); 
	   		document.doc.name.focus();
	   		return false;
	   }
	   return true;

}

</script>
<form  name="doc" action="#" method="post" onSubmit="return validate()">
enter number : <input type="text" name="no"  >
<br>
enter name: <input type="text" name="name" > <br>
<input type="submit" name="submit">


</form>
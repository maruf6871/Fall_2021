<?php
  $validationmsg1="";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  	$fname=$_POST["fname"];
  	if(empty($fname))
  	{
  	    $validationmsg1="Emter your First Name";	
  	}
  	else
  	{
  		echo"Your First Name:".$fname;
  	}
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

<h1>Registration Form</h1>
<form>
	<label>First Name        :</label>
	<input type="text" name="fname"<?php echo $validationmsg1; ?><br><br>

	<label>Last Name         :</label>
	<input type="text" name="lname"><br><br>

	<label>Age               :</label>
	<input type="number" name="age"><br><br>

	<label>Designation       : </label>
	<input type="radio" name="junior" value="Junior Programmer">
    <label>Junior Programmer</label>
    <input type="radio" name="junior" value="Senior Programmer">
    <label>Senior Programmer</label>
    <input type="radio" name="junior" value="Project Lead">
    <label>Project Lead</label>
    <br><br>

    <label>Preffered Language : </label>
	<input type="checkbox" name="junior" value="Java">
    <label>Java</label>
    <input type="checkbox" name="junior" value="PHP">
    <label>PHP</label>
    <input type="checkbox" name="junior" value="C++">
    <label>C++</label>
    <br><br>

    <label>Email              :</label>
    <input type="email" name="email">
    <br><br>

    <label>Password           :</label>
    <input type="Password" name="password">
    <br><br>

    <label>Please Choose a File:</label>
    <input type="file" name="file">

   <br><br>
    <input type="submit" name="sbutton">
    <input type="reset" name="rbutton">
</form>


</body>
</html>
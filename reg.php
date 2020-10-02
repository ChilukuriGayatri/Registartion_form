<html>
<head>
</head>
<body>
<?php
echo"<table>";
echo"<form name='Registration' method='Post'>";
echo"<tr><td>FirstName:<td><input type='text' name='firstname'></td></tr><br>";
echo"<tr><td>LastName:<td><input type='text' name='lastname'></td></tr><br>";
echo"<tr><td>Email:<td><input type='text' name='email'></td></tr>";
echo"<tr><td>PhoneNumber:<td><input type='text' name='phonenumber'><br></td></tr>";
echo"<tr><td>Date Of Birth:<td><input type='date' name='dob'><br></td></tr>";
echo"<tr><td>Gender:<br><td><input type='radio' name='gender' value='Female'>female<br></td></tr>";
echo"<tr><td><td><input type='radio' name='gender' value='male'>male<br></td></tr>";
echo"<tr><td><td><input type='button' value='submit'></td></tr>";
echo"</form>";
echo"</table>";
?>
</body>
</html>
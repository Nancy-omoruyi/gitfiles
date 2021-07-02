<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php file</title>
</head>
<body>

 <h1>Create an Account</h1>
    
<form action="myfile.php" method="post">
Name: <input type="text" name="name">
<br/>
Age: <input type="number" name="age">
<br/>
Email: <input type="email" email="email">
<br/> 
Password: <input type="password" name="password">
<br/>
<input type="submit" name="Register">
    
<p> Already have an account? Log In</p>
 
<?php
echo $_POST["name"]
?>

<?php
echo $_POST["age"]
?>

<?php
echo $_POST["email"]
?>

<?php
echo $_POST["password"]
?>




</body>
</html>



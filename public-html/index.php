<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="data:,">
</head>

<body>

<?php
echo "Welcome to Din Tai Pwn";
?>

</br>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</br>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 
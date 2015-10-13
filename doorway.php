<html>
<body>
 

<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['house'] = $_POST['house']; 

echo "<h1>Welcome to the Doorway of ".$_POST['house']." House!</h1>";
?>

<form action="welcome.php" method="post">
<p>What is the secret password? <i>(Hint: Describes your house!)</i><br />
<input type="password" name="password"></p>

<p>What is first name of the person your house is named after?<br />
<input type="text" name="founder"></p>

<input type="submit" value="Open the Door">

</form>
</body>
</html>
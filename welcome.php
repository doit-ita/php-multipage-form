<html>
<body>
 
<?php
session_start();

echo "<h1>You have arrived to ".$_SESSION['house']." House, ".$_SESSION['name']."!</h1>";

if($_SESSION['house'] == "Thao" AND $_POST['password'] == "Loyalty" AND $_POST['founder'] == "Chou"){

	echo "<p>Thao House is named after Chou Thao. Chou is an ITA Graduate from the class of 2004 - the very first class of ITA! Chou was also an office assistant and worked as a tech instructor. One thing we are certain about Chou is that he was always LOYAL to the ITA program, and he even still helps out today with translation services for ITA interviews!";
}
else if($_SESSION['house'] == "Symonette" AND $_POST['password'] == "Vision" AND $_POST['founder'] == "Hazel"){
	
	echo "<p>Symonette House is named after Hazel Symonette. Hazel was one of the co-founders of ITA! She also has served on the ITA Advisory Board since the very beginning. Hazel is very inspirational and a major role model for anyone who is lucky enough to work with her. We owe her a big gratitude for her service to ITA and her VISION around social change!";
}

else if($_SESSION['house'] == "Pedracine" AND $_POST['password'] == "Ambition" AND $_POST['founder'] == "Roslynn"){
	echo "<p>Pedracine House is named after Roslynn Pedracine. Roslynn is an ITA Graduate from the class of 2004 - the very first class of ITA! Roslynn worked as a tech instructor. One thing we are certain about Roslynn is that she is AMBITIOUS! She currently serves on the ITA Advisory Board and works in D.C. in the Federal HUD program!";
}

else if($_SESSION['house'] == "Petersen" AND $_POST['password'] == "Innovation" AND $_POST['founder'] == "Drew"){
	echo "<p>Petersen House is named after Drew Petersen. Drew is responsible for creating the Panda web page we use at ITA. He was always INNOVATIVE! He actually loved PHP code, and would love this little PHP project. Drew currently works at Spotify, but before that, just a couple jobs ago, he worked here at ITA as a tech instructor!";
}

else {
	echo "<h2> TOO BAD! You are either an imposter, or you don't know ".$_SESSION['house']." House well enough! We are sending you back out!!</h2>";
	echo '<a href="index.php">TRY AGAIN!</a>';
}
?>


</body>
</html>
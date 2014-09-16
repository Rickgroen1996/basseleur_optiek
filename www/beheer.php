<?php 



$username = "basseleur";
$password = "password";

include 'db/connection.php';

include 'views/beheer/head.php';


if (!isset($_COOKIE["login"])) {
	include 'views/beheer/loginform.php';
	if (isset($_POST["username"], $_POST["password"])) {
		if ($_POST["username"]==$username&&$_POST["password"]==$password) {
			setcookie("login", true);
		}else{
			echo "<span class=\"red\">Probeer het opnieuw!<span>";
		}
	}else{
		echo "<span class=\"red\">Vul een naam en wachtwoord in!<span>";
	}
}else if ($_COOKIE["login"]==true) {
	echo "u kunt hier uw paginas bewerken!";






}


include 'views/beheer/foot.php';

?>
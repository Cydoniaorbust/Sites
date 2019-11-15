<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['email'])) {
		$email = $_POST['email'];
		if(strlen($email) < 60) 
			if(preg_match("*@*.*", $email)) ;
			else echo 'email какой-то странный';
		else echo 'email слишком длинный';
	}
	else echo 'email не введен';
	// header('location: '. BASE_URL);
}
?>

<form method="POST">
	<input type="text" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<button type="submit">Login</button>
</form>

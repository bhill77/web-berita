<?php
function WriteURL(){
	$urlini = "http://";
		if ($_SERVER["SERVER_PORT"] != "80") {
		$urlini .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
		$urlini .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
	return $urlini;
}

function loginform(){?>
	<form action="login.php?ref=<?php echo WriteURL(); ?>" method="POST">
		<table>
			<tr>
				<td>username</td>
				<td>:</td><td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td><td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login" /></td>
			</tr>
		</table>
	</form>
<?php
}

function loginform2(){?>
	<form action="login.php?ref=<?php echo $_GET['ref']; ?>" method="POST">
		<table>
			<tr>
				<td>username</td>
				<td>:</td><td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td><td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="login" /></td>
			</tr>
		</table>
	</form>
<?php
}


?>
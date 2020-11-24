<?php 

 require_once __DIR__ . '\vendor\autoload.php';

 use App\Model\UserModel;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<style>
	.center {
		border-radius: 20px;
		border-width: 0;
		background: #E9EFF6;
		line-height: 40px;
		padding: 0 20px;
		outline: 0;
		outline-offset: 0;
	}
	.middle {
		border-radius: 20px;
		border-width: 0;
		background: #f69a73;
		line-height: 40px;
		padding: 0 20px;
		outline: 0;
		outline-offset: 0;
	}
	.middle:hover {
		background: #eaae95;
	}
	.button:hover {
		text-decoration: line-through;
		background: #f80e0ede;
	}
</style>
<body style="background-color: #2b8ce4a3;">
    <div style="text-align: center; font-family: 'Varela Round', sans-serif;line-height: 30px;">
    	<?php

			$user = new UserModel();
			$return = $user->selectAuthUser();

			$returned = json_encode($return, false);
			$result = json_decode($returned, true);

   			echo '<br>';

			foreach ($result as $keys=> $value) {
				echo "ID: " . $result[$keys]['id'] . " , Nickname: " . $result[$keys]['login'] . ' , Created: '. $result[$keys]['created_at'] . " <a class='button' style='color: #ffffffa3;' href='delete.php?delete=" . $result[$keys]['id'] . "'>УДАЛИТЬ<a/> <br>";
			}

			?>


		<form method="get" action='delete.php'style="text-align: center;border-width: 0;line-height: 30px;">
			<input class="center" type="text" name="user" placeholder="ЛОГИН" >
			<input class="center" type="text" name="password" placeholder="ПАРОЛЬ" >
			<button class="middle" type="submit">добавить</button>	
		</form>

    </div>
</body>
</html>
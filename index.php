	<?php
	error_reporting(0);
	?>
	<h1>Twitter Fetch</h1>HI<br>Enter the name of movie<br><br>Please enter the movie name: <form method="post"><input type="text" name="id" value="<?php echo $_POST['id']; ?>"><input type="submit"></form><br>
	<h2>
	<?php
	if(isset($_POST['id']))
	{
				$id = 'isset($_POST["id"])';
				echo '<br><br>Getting Tweets about [$id]...<br>';
				$site = "http://www.loklak.org/api/search.json";
				$get = file_get_contents("[$site]?q=[id]");
				$data = json_decode($json, true);
				return $data['text'];
	}
 ?>	

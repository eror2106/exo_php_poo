<?php

declare(strict_types=1); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test </title>
</head>

<body>

	<p>je vais essaye un poo avex un achichage dans le html
	</p>
	<form action="" method="post">
		<label for="">test</label>
		<input name="variable" type="number">
		<input type="submit">
	</form>
	<?php
	$variable_i = "";
	if (isset($_POST['variable'])) {
		$variable_i = htmlspecialchars($_POST['variable']);
	}

	class test
	{
		private float $i;

		public  function compte($i)

		{
			for ($j = $i; $j >= 0; $j--) {
				echo $j . '<br>';
			}
		}

		public function  set_i($i)
		{
			$this->i = $i;
			$this->compte($i);
		}
	}

	$convert = new NumberFormatter('de_DE', NumberFormatter::DECIMAL);
	$test1 = new test;
	$test1->set_i($convert->parse($variable_i));



	?>
</body>

</html>
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
	<?php

	class test
	{
		private float $i;



		public static function compte($i)

		{
			for ($j = $i; $j >= 0; $j--) {
				echo $j . '<br>';
			}
		}

		public function  get_i($i)
		{
			$this->i = $i;
			$this->compte($i);
		}
	}
	$test1 = new test;
	$test1->get_i(10);
	?>
</body>

</html>
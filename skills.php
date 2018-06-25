<?php

	for($x = 1; $x <= 12; $x++)
	{
		$string = "s".$x;
		if(empty($_POST["$string"]))
		{
			$skills .= '';
		}
		else
		{
			$skills  = $skills.$_POST["$string"].";";
		}
	}

?>
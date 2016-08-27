<?php
	abstract class Shape
	{
		public $shapeName;
		abstract function area();
		abstract function perimeter();
		abstract function view();
		abstract function validate($arr);
	}
?>

<?php
	class Circle extends Shape
	{
		public $shapeName="Բ��";
		public $radius;

		function __construct($arr)
		{
			$this->radius=$arr['radius'];
		}

		function area()
		{
			return 3.14 * $this->radius * $this->radius;
		}

		function perimeter()
		{
			return 2*3.14 * $this->radius;
		}

		function view()
		{
			$form='<form action="index.php?action=circle" method="post">';
			$form.=$this->shapeName.'�İ뾶��<input type="text" name="radius" value="'.$_POST[radius].'"/><br>';
			$form.='<input type="submit" name="dosubmit" value="����"/><br>';
			$form.='</form>';
			echo $form;
		}

		function validate($arr)
		{
			$flag=true;
			if($arr['radius']<=0)
			{
				echo $shapeName."�İ뾶����С��0��"."<br>";
				$flag=false;
				return $flag;
			}
			if($arr['radius']=="")
			{
				echo $shapeName."�İ뾶����Ϊ�գ�"."<br>";
				$flag=false;
				return $flag;
			}
			return $flag;
		}
	}

?>

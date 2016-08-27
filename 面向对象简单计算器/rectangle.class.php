<?php 
	class Rectangle extends Shape
	{
		public $shapeName="������";
		public $height;
		public $width;

		function __construct($arr)
		{
			$this->height=$arr['height'];
			$this->width=$arr['width'];
		}

		function area()
		{
			return $this->height * $this->width;
		}

		function perimeter()
		{
			return 2 * ($this->height + $this->width);
		}

		function view()
		{
			$form='<form action="index.php?action=rectangle" method="post">';
			$form.=$this->shapeName.'�ĳ���<input type="text" name="height" value="'.$_POST['height'].'" /><br>';
			$form.=$this->shapeName.'�Ŀ�<input type="text" name="width" value="'.$_POST['width'].'" /><br>';
			$form.='<input type="submit" name="dosubmit" value="����" /><br>';
			$form.='</form>';
			echo $form;
		}

		function validate($arr)
		{
			$flag=true;
			if($arr['height']<0||$arr['width']<0)
			{
				echo $shapeName."�ĳ�������С��0."."<br>";
				$flag=false;
				return $flag;
			}
			if($arr['height']==""||$arr['width']=="")
							{
				echo $shapeName."�ĳ�������Ϊ�գ�"."<br>";
				$flag=false;
				return $flag;
			}
			return $flag;
		}

	}
?>

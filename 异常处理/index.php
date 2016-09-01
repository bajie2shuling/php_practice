<?php
	/**
		 异常处理
	 */

	class WCException extends Exception
	{

		function byWater()
		{
			echo "拿水洗一下！吃完饭去上班。"; 
		}
	}
	class BFException extends Exception
	{
		function buyBread()
		{
			echo "买面包凑合一下！去上班。";
		}
	}
	class BRException extends Exception
	{
		function changeTire()
		{
			echo "换备胎！继续上路去上班。";
		}
	}
	class RDException extends Exception
	{
		function changeSMRoad()
		{
			echo "换走小路上班！";
		}
	}

	class life
	{
		function WC($flag)
		{
			if(!$flag)
				throw new WCException("厕所没纸了！");
			echo "上厕所后<br>";
		}
		function breakfast($flag)
		{
			if(!$flag)
				throw new BFException("家里没有早点了！");
			echo "吃完早饭<br>";
		}
		function drive($flag)
		{
			if(!$flag)
				throw new BRException("上班路上车胎爆了！");
			echo "开车上路<br>";
		}
		function road($flag)
		{
			if(!$flag)
				throw new RDException("高速起雾了！");
			echo "下高速到达公司<br>";
		}
	}

	try
	{
		$life = new life();

		$life->WC(true);
		$life->breakfast(true);
		$life->drive(true);
		$life->road(false);

	}
	catch(WCException $e)
	{
		echo $e->getMessage()."<br>";
		$e->byWater();
	}
	catch(BFException $e)
	{
		echo $e->getMessage()."<br>";
		$e->buyBread();
	}
	catch(BRException $e)
	{
		echo $e->getMessage()."<br>";
		$e->changeTire();
	}
	catch(RDException $e)
	{
		echo $e->getMessage()."<br>";
		$e->changeSMRoad();
	}
	catch(Exception $e)
	{
		echo $e->getMessage()."<br>";
	}
?>

<?php
	/**
		 �쳣����
	 */

	class WCException extends Exception
	{

		function byWater()
		{
			echo "��ˮϴһ�£����극ȥ�ϰࡣ"; 
		}
	}
	class BFException extends Exception
	{
		function buyBread()
		{
			echo "������պ�һ�£�ȥ�ϰࡣ";
		}
	}
	class BRException extends Exception
	{
		function changeTire()
		{
			echo "����̥��������·ȥ�ϰࡣ";
		}
	}
	class RDException extends Exception
	{
		function changeSMRoad()
		{
			echo "����С·�ϰ࣡";
		}
	}

	class life
	{
		function WC($flag)
		{
			if(!$flag)
				throw new WCException("����ûֽ�ˣ�");
			echo "�ϲ�����<br>";
		}
		function breakfast($flag)
		{
			if(!$flag)
				throw new BFException("����û������ˣ�");
			echo "�����緹<br>";
		}
		function drive($flag)
		{
			if(!$flag)
				throw new BRException("�ϰ�·�ϳ�̥���ˣ�");
			echo "������·<br>";
		}
		function road($flag)
		{
			if(!$flag)
				throw new RDException("���������ˣ�");
			echo "�¸��ٵ��﹫˾<br>";
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

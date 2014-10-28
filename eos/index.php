<?php
require_once("../myFramework/framework.php"); //class A
class A1 extends A
{
	public function model0($a)
	{
		
	}
	public function view0($a)
	{
		return $this->table($a);
	}
	public function controler0()
	{
	
	}
	public function viewLayoutHeader()
	{
		$a='';
		$a.="<br /><br /><br /><br /><br /><br /><br /><br />";
		$a.="<a href='index.php'>ึ๗าณ</a><br /><br />";
		return $this->style($a);
	}
	public function viewLayoutContent()
	{
	
	}
	
	public function sessionCheck()
	{
		$systemName='';
		$userId='';
		$userName='';
		return ;
	}	
	public function run()
	{
		$a="";
		$a.=$this->viewLayoutHeader();
		//$a="test";
		$a1=array(array(1,2),array(3,4,5));
		//echo $this->table($a1);
		echo  $a.$this->view0($a1);
		//return $a;
	}	
}


$a=new A1;
$a->run();

?>
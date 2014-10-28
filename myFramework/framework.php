<?php
class A
{
	public function style($content){return '<p style="text-align:center;">'.$content.'</p>';}
	public function table($a,$align="center")
	{
		$rr=count($a);
		$rc=count($a[0]);
		for($i=1;$i<$rr;$i++)
			if($rc<count($a[$i]))
				$rc=count($a[$i]);
		for($i=0;$i<$rr;$i++)
			for($j=0;$j<$rc;$j++)
				if(!isset($a[$i][$j]))
					$a[$i][$j]='-';
		$b='<table border="1" style="text-align: '.$align.'; margin-left: auto; margin-right: auto;">';
		$b=$b."<tr>";
		for($i=0;$i<$rc;$i++)
			$b=$b."<th>".$a[0][$i]."</th>";
		$b=$b."</tr>";
		for($j=1;$j<$rr;$j++) 
		{
			$b=$b."<tr>";
			for($i=0;$i<$rc;$i++)
			{
				if(!isset($a[$j][$i]))
					$a[$j][$i]="-";
				elseif(trim($a[$j][$i])=='')
					$a[$j][$i]="-";
				$b=$b."<td>".$a[$j][$i]."</td>";
			}
			$b=$b."</tr>";
		}
		$b=$b."</table>";
		$b=$this->style($b);
		return $b;
	}
}
?>
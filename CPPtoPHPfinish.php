<meta charset="utf-8">
<?php
$array=array(1);
for ($count=1;$count<=900;$count++) {
$array[$count]=$count+100;
}
for ($i=0;$i<=900;$i++)
{
	if (($array[$i]+1)%2==0)
	{
		if (($array[$i]+2)%3==0)
		{
			if (($array[$i]+3)%4==0)
			{
				if (($array[$i]+4)%5==0)
				echo $array[$i];
				echo " ";	
			}
		}
	}
}
?>
<meta charset="utf-8">
<?php
$array=array[900];
$count=0;
for (count<900;count++)
$array[count]=count+100;
$i=0;
for (i<=900;i++)
{
	if (($array[i]+1)%2==0)
	{
		if (($array[i]+2)%3==0)
		{
			if (($array[i]+3)%4==0)
			{
				if (($array[i]+4)%5==0)
				echo $array[i] ",";	
			}
		}
	}
}
?>
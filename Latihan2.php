<html>
<head>
<title>Latihan 2</title>
</head>
<body>
<h2>Latihan 2</h2>
<pre>
<?php
	$jml=0;
	for($i=0;$i<=6;$i++)
	{
		if(($i&2)==0)
		$jml+=$i;
	}
		echo("Akumulasi bilangan genap dari 0 s.d 6 adalah $jml");
?>
</pre>
</body>
</html>
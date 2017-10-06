<html>
<head>
<title>elseif</title>
</head>
<body>
<h2>Penggunaan kontrol if</h2>
<form>
<?php
	$nilai=80;
	echo("Nilai $nilai");
	if($nilai>=85)
	{
	 echo("Grade A");
	}elseif(($nilai>=75)and($nilai<85))
	{
	 echo("Grade B");
	}elseif(($nilai>=65)and($nilai<75))
	{
	 echo("Grade C");
	}elseif(($nilai>=55)and($nilai<65))
	{
	 echo("Grade D");
	}elseif($nilai<50)
	{
	 echo("Grade E");
	}
?>
</body>
</html>
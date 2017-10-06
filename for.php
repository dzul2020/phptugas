<html>
<head>
<title>for</title>
</head>
<body>
<h2> Penggunaan ontrol for </h2>
<b>Nama Bulan : </b><br>
<?php
$bulan=array("January","February","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
for($i=0;$i<count($bulan);$i++)
{
	echo(($i+1)."$bulan[$i] <br>");
}
?>
</body>
</html>
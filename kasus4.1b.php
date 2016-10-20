<html>
<head>
<title>Hasil</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="2">
<?php


$uas=$_POST['tuas'];?>
<?php
$na=($uas);
?>

<?php
if ($na <= 59 )
{
$nh = 'Cukup' ;
}
else if ($na <= 85 )
{
$nh = 'Baik' ;
}

else if ($na <= 100 )
{
$nh = 'Baik Sekali' ;
}
?>

<tr>
<th>Nilai Angka</th>
<th>Nilai Huruf</th>
</tr>
<tr>
<td align="center"><?php echo$na;?></td>
<td align="center"><?php echo$nh;?></td>
</table>
</tr>
<tr>
<a></a></br>
<a></a></br>
<a><marquee>Bagi Mahasiswa Yang Mendapat Nilai E, Agar Dapat Memperbaiki Nilai Sebelum Tanggal 20 Februari 2012</marquee></a>
</body>
</html>
<?php
header("Content-type: text/xml");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akademik";
$sambung=mysql_connect($servername,$username,$password);
   mysql_select_db($dbname,$sambung);
$sql_tampil="select * from mahasiswa";
$query_tampil=mysql_query ($sql_tampil) or die($sql_tampil);
echo "<akademik>";
while($row=mysql_fetch_array($query_tampil))
{
echo "<mahasiswa>

<nim>".$row["nim"]."</nim>

<nama>".$row["nama"]."</nama>

<alamat>".$row["alamat"]."</alamat>

<progdi>".$row["prodi"]."</progdi>

</mahasiswa>";
}
echo "</akademik>";
?>
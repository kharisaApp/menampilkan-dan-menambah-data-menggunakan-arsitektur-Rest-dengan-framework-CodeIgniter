<html>
<head>
<title>Penyewa</title>
</head>
<body>
<?php
if (isset ($_POST['Nama'])) {
$url = 'https://konsumen.000webhostapp.com/tugas.php';
//$data = "[{\"id\":\".$_POST['id'].\",\"nama\":\".$_POST['nama'].\",\"nomor\":\".$_POST['nomor'].\"}]";//
$data="{\"id\":\"".$_POST['id']."\",\"nama\":\"".$_POST['nama']."\",\"nomor\":\"".$_POST['nomor']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="kontak.php">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="id" id="id"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<tr>
<td>Email</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>
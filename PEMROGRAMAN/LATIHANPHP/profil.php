<!DOCTYPE html>
<html>
<head>
    <title>Profil Pribadi</title>
</head>
<body>

<?php
// Data Profil Pribadi
$nama = "Nama Anda";
$umur = 25;
$pekerjaan = "Web Developer";
$alamat = "Jl. Contoh No. 123";
$fotoProfil = "gambar_pofil.jpg"; // Sesuaikan dengan nama gambar Anda

// Jika gambar tidak ditemukan, Anda dapat menambahkan penanganan kesalahan
if (file_exists($fotoProfil)) {
    echo '<img src="gambar_profil.jpg' . $fotoProfil . '" alt="Foto Profil">';
} else {
    echo '<p>Foto Profil Tidak Ditemukan</p>';
}
?>

<h1>Profil Pribadi</h1>

<p><strong>Nama:</strong> <?php echo $nama; ?></p>
<p><strong>Umur:</strong> <?php echo $umur; ?></p>
<p><strong>Pekerjaan:</strong> <?php echo $pekerjaan; ?></p>
<p><strong>Alamat:</strong> <?php echo $alamat; ?></p>

<!-- Anda dapat menambahkan lebih banyak informasi profil di sini -->

</body>
</html>

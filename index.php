<!DOCTYPE html>
<html lang="en">
    <head>
        <mete charset="UTF-8">
        <mete http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<?php
    require 'koneksi.php';
    $sql = "SELECT * FROM pegawai";
    $hasil = $koneksi->query($sql);
?>
<table border="1">
    <tr>
        <th>Nomor</th>
        <th>nama</th>
        <th>ID</th>
        <th>jeniskelamin</th>
        <th>alamat</th>
        <th>gaji</th>
        <th>telpon</th>
</tr>
<?php
if($hasil-num_rows > 0){
    $nomor = 1;
    while($baris = $hasil->fetch_assoc()){
    ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><?= $baris['nama']?></td>
            <td><?= $baris['ID']?></td>
            <td><?= $baris['jeniskelamin']?></td>
            <td><?= $baris['alamat']?></td>
            <td><?= $baris['gaji']?></td>
            <td><?= $baris['telpon']?></td>
    </tr>
    <?php
    $nomor++;
    }
}
?>
</table>
</body>
</html>
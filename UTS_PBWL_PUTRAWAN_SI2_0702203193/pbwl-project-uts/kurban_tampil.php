
<?php

$kurban = new App\Kurban();
$rows = $kurban->tampil();

?>

<h2>Input Data</h2>
<button class="button"><a href="index.php?page=kurban_input">Tambah Kurban</a></button>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA SOHIBUL</th>
        <th>HEWAN KURBAN</th>
        <th>JENIS PEMBAYARAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_kurban']; ?></td>
        <td><?php echo $row['nama_pengkurban']; ?></td>
        <td><?php echo $row['jenis_kurban']; ?></td>
        <td><?php echo $row['jenis_pembayaran']; ?></td>
        <td><a href="index.php?page=kurban_edit&id=<?php echo $row['id_kurban']; ?>"><img class="hide"src="layouts/assets/img/pen.png" alt=""></a></td>
        <td><a href="index.php?page=kurban_delete&id=<?php echo $row['id_kurban']; ?>"><img class="hide"src="layouts/assets/img/delet.png" alt=""></a></td>
    </tr>
    <?php } ?>
</table>

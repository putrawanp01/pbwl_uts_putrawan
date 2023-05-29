
<?php

$pengkurban = new App\Pengkurban();
$rows = $pengkurban->tampil();

?>

<h2>Input Data</h2>
<button class="button"><a href="index.php?page=pengkurban_input">Tambah Sohibul Kurban</a></button>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA SOHIBUL</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pengkurban']; ?></td>
        <td><?php echo $row['nama_pengkurban']; ?></td>
        <td><?php echo $row['alamat_pengkurban']; ?></td>
        <td><a href="index.php?page=pengkurban_edit&id=<?php echo $row['id_pengkurban']; ?>"><img class="hide" src="layouts/assets/img/pen.png" alt=""></a></td>
        <td><a href="index.php?page=pengkurban_delete&id=<?php echo $row['id_pengkurban']; ?>"><img class="hide" src="layouts/assets/img/delet.png" alt=""></a></td>
    </tr>
    <?php } ?>
</table>


<?php

$pelaksanaan = new App\Pelaksanaan();
$rows = $pelaksanaan->tampil();

?>

<h2>Input Data</h2>
<button class="button"><a href="index.php?page=pelaksanaan_input">Tambah Pelaksanaan</a></button>
<table>
    <tr>
        <th>NO</th>
        <th>HEWAN KURBAN</th>
        <th>PEMBAYARAN</th>
        <th>TANGGAL PELAKSANAAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pelaksanaan']; ?></td>
        <td><?php echo $row['jenis_kurban']; ?></td>
        <td><?php echo $row['pembayaran']; ?></td>
        <td><?php echo $row['tgl_pelaksanaan']; ?></td>
        <td><a href="index.php?page=pelaksanaan_edit&id=<?php echo $row['id_pelaksanaan']; ?>"><img class="hide"src="layouts/assets/img/pen.png" alt=""></a></td>
        <td><a href="index.php?page=pelaksanaan_delete&id=<?php echo $row['id_pelaksanaan']; ?>"><img class="hide"src="layouts/assets/img/delet.png" alt=""></a></td>
    </tr>
    <?php } ?>
</table>

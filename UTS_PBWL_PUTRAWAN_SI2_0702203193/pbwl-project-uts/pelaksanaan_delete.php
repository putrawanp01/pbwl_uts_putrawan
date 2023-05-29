<?php

$id = $_GET['id'];

$pelaksanaan = new App\Pelaksanaan();
$rows = $pelaksanaan->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a style="color:red"href="index.php?page=pelaksanaan_tampil">Kembali</a>
</div>
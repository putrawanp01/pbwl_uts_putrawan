<?php

$id = $_GET['id'];

$pengkurban = new App\Pengkurban();
$rows = $pengkurban->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a style="color:red"href="index.php?page=pengkurban_tampil">Kembali</a>
</div>
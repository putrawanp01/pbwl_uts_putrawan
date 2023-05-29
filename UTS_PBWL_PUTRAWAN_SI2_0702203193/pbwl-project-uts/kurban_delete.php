<?php

$id = $_GET['id'];

$kurban = new App\Kurban();
$rows = $kurban->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a style="color:red"href="index.php?page=kurban_tampil">Kembali</a>
</div>
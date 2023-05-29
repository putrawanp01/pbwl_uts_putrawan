<?php

require_once "inc/Koneksi.php";
require_once "app/Kurban.php";

$kurban = new App\Kurban();

if (isset($_POST['btn_simpan'])) {
    $kurban->simpan();
    header("location:index.php?page=kurban_tampil");
}

if (isset($_POST['btn_update'])) {
    $kurban->update();
    header("location:index.php?page=kurban_tampil");
}

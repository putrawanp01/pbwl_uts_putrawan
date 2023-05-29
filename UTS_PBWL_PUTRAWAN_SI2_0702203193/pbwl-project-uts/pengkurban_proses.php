<?php

require_once "inc/Koneksi.php";
require_once "app/Pengkurban.php";

$pengkurban = new App\Pengkurban();

if (isset($_POST['btn_simpan'])) {
    $pengkurban->simpan();
    header("location:index.php?page=pengkurban_tampil");
}

if (isset($_POST['btn_update'])) {
    $pengkurban->update();
    header("location:index.php?page=pengkurban_tampil");
}

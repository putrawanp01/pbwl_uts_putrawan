<?php

require_once "inc/Koneksi.php";
require_once "app/Pelaksanaan.php";

$pelaksanaan = new App\Pelaksanaan();

if (isset($_POST['btn_simpan'])) {
    $pelaksanaan->simpan();
    header("location:index.php?page=pelaksanaan_tampil");
}

if (isset($_POST['btn_update'])) {
    $pelaksanaan->update();
    header("location:index.php?page=pelaksanaan_tampil");
}

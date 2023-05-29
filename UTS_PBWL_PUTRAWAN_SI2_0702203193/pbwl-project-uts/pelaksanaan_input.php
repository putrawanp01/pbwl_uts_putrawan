<h2>Input Data</h2>

<?php
require_once "vendor/autoload.php";
require_once "inc/Koneksi.php";
$pelaksanaan = new App\Pelaksanaan();
$rows = $pelaksanaan->kurban();
?>

<form action="pelaksanaan_proses.php" method="post">
    <table>
        <tr>
            <td>HEWAN KURBAN</td>
            <td style="text-align:left">
                <select name="pelaksanaan_id_kurban" id="">
                    <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['id_kurban']; ?>">
                    <?php echo $row['jenis_kurban']; ?>
                    </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>PEMBAYARAN</td>
            <td style="text-align:left"><input type="text" name="pembayaran"></td>
        </tr>
        <tr>
            <td>TANGGAL PELAKSANAAN</td>
            <td style="text-align:left"><input type="datetime-local" name="tgl_pelaksanaan"></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:left"><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
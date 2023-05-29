<h2>Input Data</h2>

<?php
require_once "vendor/autoload.php";
require_once "inc/Koneksi.php";
$kurban = new App\Kurban();
$rows = $kurban->pengkurban();
?>

<form action="kurban_proses.php" method="post">
    <table style="border:none">
        <tr>
            <td>NAMA SOHIBUL</td>
            <td style="text-align:left">
                <select name="kurban_id_pengkurban" id="">
                    <?php foreach ($rows as $row) { ?>
                    <option value="<?php echo $row['id_pengkurban']; ?>">
                    <?php echo $row['nama_pengkurban']; ?>
                    </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>JENIS KURBAN</td>
            <td style="text-align:left"><input type="text" name="jenis_kurban"></td>
        </tr>
        <tr>
            <td>JENIS PEMBAYARAN</td>
            <td style="text-align:left"><input type="text" name="jenis_pembayaran"></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:left"><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
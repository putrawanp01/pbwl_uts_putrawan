<?php

$id = $_GET['id'];
$pelaksanaan = new App\Pelaksanaan();

$row = $pelaksanaan->edit($id);
?>

<h2>Edit Data Pelaksanaan Kurban</h2>

<form action="pelaksanaan_proses.php" method="post">
    <input type="hidden" name="id_pelaksanaan" value="<?php echo $row['id_pelaksanaan']; ?>">
    <input type="hidden" name="pelaksanaan_id_kurban" value="<?php echo $row['pelaksanaan_id_kurban']; ?>">
    <table>
        <tr>
            <td>Hewan pelaksanaanL</td>
            <td style="text-align:left"><input type="text" name="pembayaran" value="<?php echo $row['pembayaran']; ?>"></td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td style="text-align:left"><input type="datetime-local" name="tgl_pelaksanaan" value="<?php echo $row['tgl_pelaksanaan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:left"><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
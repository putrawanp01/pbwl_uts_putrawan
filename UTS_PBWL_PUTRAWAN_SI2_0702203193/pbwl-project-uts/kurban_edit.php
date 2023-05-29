<?php

$id = $_GET['id'];
$kurban = new App\Kurban();

$row = $kurban->edit($id);
?>

<h2>Edit Data Kurban</h2>

<form action="kurban_proses.php" method="post">
    <input type="hidden" name="id_kurban" value="<?php echo $row['id_kurban']; ?>">
    <input type="hidden" name="kurban_id_pengkurban" value="<?php echo $row['kurban_id_pengkurban']; ?>">
    <table>
        <tr>
            <td>Hewan KurbanL</td>
            <td style="text-align:left"><input type="text" name="jenis_kurban" value="<?php echo $row['jenis_kurban']; ?>"></td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td style="text-align:left"><input type="text" name="jenis_pembayaran" value="<?php echo $row['jenis_pembayaran']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:left"><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
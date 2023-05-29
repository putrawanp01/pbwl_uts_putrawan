<?php

$id = $_GET['id'];
$pengkurban = new App\Pengkurban();

$row = $pengkurban->edit($id);
?>

<h2>Edit Sohibul Kurban</h2>

<form action="pengkurban_proses.php" method="post">
    <input type="hidden" name="id_pengkurban" value="<?php echo $row['id_pengkurban']; ?>">
    <table>
        <tr>
            <td>NAMA SOHIBUL</td>
            <td style="text-align:left"><input type="text" name="nama_pengkurban" value="<?php echo $row['nama_pengkurban']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td style="text-align:left"><textarea name="alamat_pengkurban" id="" cols="40" rows="5"><?php echo $row['alamat_pengkurban']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:left"><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
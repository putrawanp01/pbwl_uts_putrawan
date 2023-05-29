<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pelaksanaan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT pelaksanaan.*, kurban.*
        FROM tb_pelaksanaan pelaksanaan
        LEFT JOIN tb_kurban kurban
        ON pelaksanaan.pelaksanaan_id_kurban=kurban.id_kurban";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function kurban()
    {
        $sql = "SELECT * FROM tb_kurban";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $pelaksanaan_id_kurban = $_POST['pelaksanaan_id_kurban'];
        $pembayaran = $_POST['pembayaran'];
        $tgl_pelaksanaan = $_POST['tgl_pelaksanaan'];

        $sql = "INSERT INTO tb_pelaksanaan ( pelaksanaan_id_kurban, pembayaran, tgl_pelaksanaan) VALUES ( :pelaksanaan_id_kurban, :pembayaran, :tgl_pelaksanaan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pelaksanaan_id_kurban", $pelaksanaan_id_kurban);
        $stmt->bindParam(":pembayaran", $pembayaran);
        $stmt->bindParam(":tgl_pelaksanaan", $tgl_pelaksanaan);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pelaksanaan WHERE id_pelaksanaan=:id_pelaksanaan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pelaksanaan", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pembayaran = $_POST['pembayaran'];
        $tgl_pelaksanaan = $_POST['tgl_pelaksanaan'];
        $id_pelaksanaan = $_POST['id_pelaksanaan'];

        $sql = "UPDATE tb_pelaksanaan SET pembayaran=:pembayaran, tgl_pelaksanaan=:tgl_pelaksanaan WHERE id_pelaksanaan=:id_pelaksanaan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pembayaran", $pembayaran);
        $stmt->bindParam(":tgl_pelaksanaan", $tgl_pelaksanaan);
        $stmt->bindParam(":id_pelaksanaan", $id_pelaksanaan);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pelaksanaan WHERE id_pelaksanaan=:id_pelaksanaan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pelaksanaan", $id);
        $stmt->execute();

    }

}
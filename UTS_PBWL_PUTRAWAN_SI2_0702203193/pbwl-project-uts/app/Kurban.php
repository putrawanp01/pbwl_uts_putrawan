<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kurban extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT kurban.*, pengkurban.*
        FROM tb_kurban kurban
        LEFT JOIN tb_pengkurban pengkurban
        ON kurban.kurban_id_pengkurban=pengkurban.id_pengkurban";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function pengkurban()
    {
        $sql = "SELECT * FROM tb_pengkurban";
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
        $kurban_id_pengkurban = $_POST['kurban_id_pengkurban'];
        $jenis_kurban = $_POST['jenis_kurban'];
        $jenis_pembayaran = $_POST['jenis_pembayaran'];

        $sql = "INSERT INTO tb_kurban ( kurban_id_pengkurban, jenis_kurban, jenis_pembayaran) VALUES ( :kurban_id_pengkurban, :jenis_kurban, :jenis_pembayaran)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kurban_id_pengkurban", $kurban_id_pengkurban);
        $stmt->bindParam(":jenis_kurban", $jenis_kurban);
        $stmt->bindParam(":jenis_pembayaran", $jenis_pembayaran);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kurban WHERE id_kurban=:id_kurban";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kurban", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $jenis_kurban = $_POST['jenis_kurban'];
        $jenis_pembayaran = $_POST['jenis_pembayaran'];
        $id_kurban = $_POST['id_kurban'];

        $sql = "UPDATE tb_kurban SET jenis_kurban=:jenis_kurban, jenis_pembayaran=:jenis_pembayaran WHERE id_kurban=:id_kurban";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jenis_kurban", $jenis_kurban);
        $stmt->bindParam(":jenis_pembayaran", $jenis_pembayaran);
        $stmt->bindParam(":id_kurban", $id_kurban);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kurban WHERE id_kurban=:id_kurban";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kurban", $id);
        $stmt->execute();

    }

}
<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pengkurban extends Koneksi { 

    public function tampil()
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
        $nama_pengkurban = $_POST['nama_pengkurban'];
        $alamat_pengkurban = $_POST['alamat_pengkurban'];

        $sql = "INSERT INTO tb_pengkurban (nama_pengkurban, alamat_pengkurban) VALUES (:nama_pengkurban, :alamat_pengkurban)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pengkurban", $nama_pengkurban);
        $stmt->bindParam(":alamat_pengkurban", $alamat_pengkurban);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pengkurban WHERE id_pengkurban=:id_pengkurban";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pengkurban", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_pengkurban = $_POST['nama_pengkurban'];
        $alamat_pengkurban = $_POST['alamat_pengkurban'];
        $id_pengkurban = $_POST['id_pengkurban'];

        $sql = "UPDATE tb_pengkurban SET nama_pengkurban=:nama_pengkurban, alamat_pengkurban=:alamat_pengkurban WHERE id_pengkurban=:id_pengkurban";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pengkurban", $nama_pengkurban);
        $stmt->bindParam(":alamat_pengkurban", $alamat_pengkurban);
        $stmt->bindParam(":id_pengkurban", $id_pengkurban);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pengkurban WHERE id_pengkurban=:id_pengkurban";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pengkurban", $id);
        $stmt->execute();

    }

}
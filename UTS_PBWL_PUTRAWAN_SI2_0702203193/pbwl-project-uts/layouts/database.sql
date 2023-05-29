CREATE TABLE tb_pengkurban (
    id_pengkurban INT (11) NOT NULL AUTO_INCREMENT,
    nama_pengkurban VARCHAR (100) NOT NULL,
    alamat_pengkurban VARCHAR (300) NOT NULL,
    PRIMARY KEY (id_pengkurban)
);

CREATE TABLE tb_kurban ( 
    id_kurban INT (11) NOT NULL AUTO_INCREMENT,
    kurban_id_pengkurban INT (11) NOT NULL,
    jenis_kurban VARCHAR (100) NOT NULL,
    jenis_pembayaran VARCHAR (100) NOT NULL,
    PRIMARY KEY (id_kurban),
    FOREIGN KEY (kurban_id_pengkurban) REFERENCES tb_pengkurban(id_pengkurban)
);

CREATE TABLE tb_pelaksanaan (
    id_pelaksanaan INT (11) NOT NULL AUTO_INCREMENT,
    pelaksanaan_id_kurban INT (11) NOT NULL,
    pembayaran VARCHAR (100) NOT NULL,
    tgl_pelaksanaan DATETIME,
    PRIMARY KEY (id_pelaksanaan),
    FOREIGN KEY (pelaksanaan_id_kurban) REFERENCES tb_kurban(id_kurban)
);
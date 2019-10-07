<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Resthiana",
    //         "nrp" => "173040057",
    //         "email" => "resthiana_173040057@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Tawfeeq A'atef",
    //         "nrp" => "143010000",
    //         "email" => "tawfeeqAatef@gmail.com",
    //         "jurusan" => "Sastra Inggris"
    //     ],
    //     [
    //         "nama" => "Evi Silvia Andriani",
    //         "nrp" => "173040050",
    //         "email" => "esa_173040050@mail.unpas.ac.id",
    //         "jurusan" => "Pendidikan Biologi"
    //     ]
    // ];

        private $dbh;
        private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDO $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
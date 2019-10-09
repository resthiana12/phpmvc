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

        private $table = 'mahasiswa';
        private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
       $this->db->query('SELECT * FROM '.$this->table);
       return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
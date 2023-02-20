<?php
require('human.php');

class proses
{
    //constructor
    public function __construct()
    {
    }

    //method tambah untuk mengset data 
    public function tambah(mahasiswa &$mahasiswa, $nik, $nama, $kelamin, $universitas, $email, $nim, $fakultas, $prodi)
    {
        $mahasiswa->setnik($nik);
        $mahasiswa->setnama($nama);
        $mahasiswa->setkelamin($kelamin);
        $mahasiswa->setuniversitas($universitas);
        $mahasiswa->setemail($email);
        $mahasiswa->setnim($nim);
        $mahasiswa->setfakultas($fakultas);
        $mahasiswa->setprodi($prodi);
    }
    //method untuk menampilkan seluruh data
    public function tampil($mahasiswa)
    {
        echo "<table border = '1'>";
        echo "<tr>" .
            "<th>No</th>" .
            "<th>NIK</th>" .
            "<th>Nama</th>" .
            "<th>Kelamin</th>" .
            "<th>Universitas</th>" .
            "<th>Email</th>" .
            "<th>NIM</th>" .
            "<th>Fakultas</th>" .
            "<th>Prodi</th>" .
            "</tr>";

        $i = 1;
        foreach ($mahasiswa as $orang) {
            echo "<tr>" .
                "<th>" . $i . "</th>" .
                "<th>" . $orang->getnik() . "</th>" .
                "<th>" . $orang->getnama() . "</th>" .
                "<th>" . $orang->getkelamin() . "</th>" .
                "<th>" . $orang->getuniversitas() . "</th>" .
                "<th>" . $orang->getemail() . "</th>" .
                "<th>" . $orang->getnim() . "</th>" .
                "<th>" . $orang->getfakultas() . "</th>" .
                "<th>" . $orang->getprodi() . "</th>" .
                "</tr>";
            $i++;
        }
        echo "</table>";
    }
    function __destruct()
    {
    }
}

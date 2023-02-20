<?php

require('proses.php');

//instansi object mahasiswa
$mhs[0] = new mahasiswa();
$mhs[1] = new mahasiswa();
$mhs[2] = new mahasiswa();

$proses = new proses(); //instansi objek process

//menambahkan data dengan proses tambah
$proses->tambah($mhs[0], "30001", "Fikri", "Pria", "UPI", "fikri@gmail.com", "2107264", "MIPA", "Ilkom");
$proses->tambah($mhs[1], "30002", "Muhammad", "Pria", "UPI", "Muhammad@gmail.com", "2107265", "MIPA", "Ilkom");
$proses->tambah($mhs[2], "30003", "Kafilli", "Pria", "UPI", "Kafilli@gmail.com", "2107266", "MIPA", "Ilkom");

//menampilkan data menggunakan proses tampil
echo "Data Mahasiswa";

$proses->tampil($mhs);

# LATIHAN 2 DPBO 2023

## Janji
 Saya Muhammad Fikri Kafilli NIM 2107264 mengerjakan Latihan 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi Tugas
Buatlah program berbasis OOP menggunakan bahasa pemrograman C++, Java, Python, dan PHP yang mengimplementasikan konsep Multi-level Inheritance  pada kelas - kelas tersebut:
* Mahasiswa: NIM, nama, jenis_kelamin, fakultas, prodi
* Human: NIK, nama, jenis_kelamin
* SivitasAkademik: asal_universitas, email_edu

## Desain Program
Desain Program dibagi menjadi 4 class yaitu human, sivitas, mahasiswa, dan proses. Mahasiswa merupakan chiild dari sivitas dan sivitas adalah child dari human. Alasan dari design tersebut adalah karena mahasiswa adalah bagian dari sivitas dan sivitas adalah bagian dari human. Ketiga class tersebut bisa saling berhubungan inheritance karena tiap class merupakan objek yang sama yaitu manusia, memiliki atribut yang sama, dan ada atribut tambahan untuk setiap childnya.

Desain Algoritma Menggunakan uml

![UML drawio](https://user-images.githubusercontent.com/100756191/220174902-8bede0d3-36c1-4159-810d-ae518eb9bad7.png)



1. Human

  Terdapat 3 atribut pada kelas Mhs dan juga method Setter dan Getter untuk tiap atribut
  * NIK (`string`)
  * Nama (`string`)
  * Kelamin (`string`) 

  
2. Sivitas (child dari class Human)

  Terdapat 2 atribut pada kelas Process dan juga method setter dan getter untuk tiap atribut
  * Universitas (`string`)
  * email (`string`)
 
3. Mahasiswa (child dari class sivitas)

  Terdapat 3 atribut pada kelas Process dan juga method setter dan getter untuk tiap atribut
  * NIM (`string`)
  * Prodi (`string`)
  * Fakultas (`string`)

4. Proses

  Terdapat 2 Method pada kelas proses
  * Tambah -> Untuk menambahkan data ke dalam list
  * Tampil -> Untuk menampilkan data yang ada di dalam list
  
 ## Alur Program
 
1. User diminta memasukkan datanya
2. Data dimasukkan ke dalam list 
3. Data ditampilkan 
 
 ## Dokumentasi
 * Java
 
 ![ss](https://user-images.githubusercontent.com/100756191/218930571-41a36cc2-a06d-4c36-9917-aaa429e7d4ca.png)
 
 * PHP
 
 ![image](https://user-images.githubusercontent.com/100756191/220173105-b2820466-c87c-4247-9a2b-6b8d0c8e87c7.png)




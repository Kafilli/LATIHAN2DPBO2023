# import class
from human import mahasiswa
from proses import proses

mhs = []  # list tampungan objeck
# meminta masukkan user
print("=================")
print("NIK : ", end="")
nik = input()
print("nama : ", end="")
nama = input()
print("kelamin : ", end="")
kelamin = input()
print("universitas : ", end="")
universitas = input()
print("email : ", end="")
email = input()
print("nim : ", end="")
nim = input()
print("fakultas : ", end="")
fakultas = input()
print("prodi : ", end="")
prodi = input()
# instance proses
proses = proses(mhs)

# menambah data ke dalam list
proses.tambah(mhs, nik, nama, kelamin, universitas,
              email, nim, fakultas, prodi)
# manmpilkan data
proses.tampil(mhs)

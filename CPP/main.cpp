#include "proses.cpp"

using namespace std;

int main()
{
    mahasiswa mhs;                                                       // instance mahasiswa
    proses proses;                                                       // instance proses
    list<mahasiswa> llist;                                               // list tampungan objek
    string nik, nama, kelamin, universitas, email, nim, fakultas, prodi; // variabel tampungan input
    // meminta masukkan kepada user
    cout << "NIK: ";
    cin >> nik;
    cout << "nama: ";
    cin >> nama;
    cout << "kelamin: ";
    cin >> kelamin;
    cout << "universitas: ";
    cin >> universitas;
    cout << "email: ";
    cin >> email;
    cout << "nim: ";
    cin >> nim;
    cout << "fakultas: ";
    cin >> fakultas;
    cout << "prodi: ";
    cin >> prodi;
    // menambah data ke dalam list
    proses.tambah(&llist, nik, nama, kelamin, universitas, email, nim, fakultas, prodi);
    // menampilkan data
    proses.tampil(llist);

    return 0;
}
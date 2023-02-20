#include "human.cpp"
using namespace std;

class proses
{
public:
    // construcotr
    proses()
    {
    }
    // method untuk menambah data
    void tambah(list<mahasiswa> *llist, string nik, string nama, string kelamin, string universitas, string email, string nim, string fakultas, string prodi)
    {
        mahasiswa mhs;
        mhs.setnik(nik);
        mhs.setnama(nama);
        mhs.setkelamin(kelamin);
        mhs.setuniversitas(universitas);
        mhs.setemail(email);
        mhs.setnim(nim);
        mhs.setfakultas(fakultas);
        mhs.setprodi(prodi);
        (*llist).push_back(mhs);
    }
    // method untuk menampilkan data
    void tampil(list<mahasiswa> llist)
    {
        int i = 1;
        for (list<mahasiswa>::iterator it = llist.begin(); it != llist.end(); it++)
        {
            cout << "=================================";
            cout << "\nData ke " << (i);
            cout << "\nnik : " + it->getnik();
            cout << "\nnama : " + it->getnama();
            cout << "\nkelamin : " + it->getkelamin();
            cout << "\nuniversitas : " + it->getuniversitas();
            cout << "\nprodi : " + it->getprodi();
            cout << "\nnim : " + it->getnim();
            cout << "\nfakultas : " + it->getfakultas();
            cout << "\nprodi : " + it->getprodi();
            i++;
        }
    }
    /// destructor
    ~proses()
    {
    }
};
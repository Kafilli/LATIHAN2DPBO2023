// import library
#include <iostream>
#include <string>
#include <list>
#include <bits/stdc++.h>

// standard namespace
using namespace std;

// class human
class human
{
private:
    string nik, nama, kelamin;

public:
    // constructor
    human()
    {
        this->nik = "";
        this->kelamin = "";
        this->nama = "";
    }
    // setter dan getter
    string getnama()
    {
        return this->nama;
    }
    string getnik()
    {
        return this->nik;
    }
    string getkelamin()
    {
        return this->kelamin;
    }

    void setnama(string nama)
    {
        this->nama = nama;
    }
    void setnik(string nik)
    {
        this->nik = nik;
    }
    void setkelamin(string kelamin)
    {
        this->kelamin = kelamin;
    }
    // destructor
    ~human()
    {
    }
};

// class sivitas sebagai child dari human
class sivitas : public human
{

private:
    string universitas, email;

public:
    // constructor
    sivitas()
    {
        this->email = "";
        this->universitas = "";
    }
    // setter dan getter
    void setuniversitas(string universitas)
    {
        this->universitas = universitas;
    }
    void setemail(string email)
    {
        this->email = email;
    }
    string getuniversitas()
    {
        return this->universitas;
    }
    string getemail()
    {
        return this->email;
    }
    // destructor
    ~sivitas()
    {
    }
};

// class mahasiswa sebagai child dari sivitas
class mahasiswa : public sivitas
{
private:
    string nim, fakultas, prodi;

public:
    // constructor
    mahasiswa()
    {
        this->nim = "";
        this->fakultas = "";
        this->prodi = "";
    }

    // setter dan getter
    void setnim(string nim)
    {
        this->nim = nim;
    }
    void setfakultas(string fakultas)
    {
        this->fakultas = fakultas;
    }
    void setprodi(string prodi)
    {
        this->prodi = prodi;
    }
    string getnim()
    {
        return this->nim;
    }
    string getfakultas()
    {
        return this->fakultas;
    }
    string getprodi()
    {
        return this->prodi;
    }
    // destructor
    ~mahasiswa()
    {
    }
};
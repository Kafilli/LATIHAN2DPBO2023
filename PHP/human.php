<?php
//class human 
class human
{
    //atribut private
    private $nik;
    private $nama;
    private $kelamin;

    //constructor
    public function __construct()
    {
        $this->nik = "";
        $this->nama = "";
        $this->kelamin = "";
    }

    //setter dan getter
    public function setnik($nik)
    {
        $this->nik = $nik;
    }
    public function setnama($nama)
    {
        $this->nama = $nama;
    }
    public function setkelamin($kelamin)
    {
        $this->kelamin = $kelamin;
    }
    public function getnik()
    {
        return $this->nik;
    }
    public function getnama()
    {
        return $this->nama;
    }
    public function getkelamin()
    {
        return $this->kelamin;
    }
    //destructor
    function __destruct()
    {
    }
}

//class sivitas child dari human
class sivitas extends human
{
    //atribut private
    private $universitas;
    private $email;
    //constructor

    public function __construct()
    {
        $this->universitas = "";
        $this->email = "";
    }
    //setter dan getter

    public function setuniversitas($universitas)
    {
        $this->universitas = $universitas;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
    public function getuniversitas()
    {
        return $this->universitas;
    }
    public function getemail()
    {
        return $this->email;
    }
    //destructor
    function __destruct()
    {
    }
}

class mahasiswa extends sivitas
{
    //atribut private
    private $nim;
    private $fakultas;
    private $prodi;

    //constructor
    public function __construct()
    {
        $this->nim = "";
        $this->fakultas = "";
        $this->prodi = "";
    }
    //setter dan getter

    public function setfakultas($fakultas)
    {
        $this->fakultas = $fakultas;
    }
    public function setnim($nim)
    {
        $this->nim = $nim;
    }
    public function setprodi($prodi)
    {
        $this->prodi = $prodi;
    }
    public function getfakultas()
    {
        return $this->fakultas;
    }
    public function getnim()
    {
        return $this->nim;
    }
    public function getprodi()
    {
        return $this->prodi;
    }
    //destructor
    function __destruct()
    {
    }
}

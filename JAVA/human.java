//class human
public class human {
    //atribut private
    private String nik;
    private String nama;
    private String kelamin;

       //atribut public
    //constructor
    public human() {
        this.nik = "";
        this.nama = "";
        this.kelamin = "";

    }
    //setter dan getter
    public void setnama(String nama) {
        this.nama = nama;
    }

    public void setnik(String nik) {
        this.nik = nik;
    }

    public void setkelamin(String kelamin) {
        this.kelamin = kelamin;
    }

    public String getnik() {
        return this.nik;
    }

    public String getnama() {
        return this.nama;
    }

    public String getkelamin() {
        return this.kelamin;
    }
}

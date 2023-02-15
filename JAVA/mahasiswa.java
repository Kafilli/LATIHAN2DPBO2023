
public class mahasiswa extends sivitas {
    private String fakultas;
    private String prodi;
    private String nim;

    public mahasiswa() {
        this.fakultas = "";
        this.prodi = "";
    }

    public void setnim(String nim) {
        this.nim = nim;
    }

    public void setfakultas(String fakultas) {
        this.fakultas = fakultas;
    }

    public void setprodi(String prodi) {
        this.prodi = prodi;
    }

    public String getnim() {
        return this.nim;
    }

    public String getfakultas() {
        return this.fakultas;
    }

    public String getprodi() {
        return this.prodi;
    }
}

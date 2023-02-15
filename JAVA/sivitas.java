
public class sivitas extends human {
    private String universitas;
    private String email;

    public sivitas() {
        this.universitas = "";
        this.email = "";
    }

    public void setuni(String universitas) {
        this.universitas = universitas;
    }

    public void setemail(String email) {
        this.email = email;
    }

    public String getuniversitas() {
        return this.universitas;
    }

    public String getemail() {
        return this.email;
    }
}

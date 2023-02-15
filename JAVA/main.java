
import java.util.ArrayList;
import java.util.Scanner;

public class main {
    public static void main(String[] args) {
        proses pro = new proses();// inisialisasi object proses
        ArrayList<mahasiswa> list = new ArrayList<>();// membuat list untuk tampungan
        Scanner sc = new Scanner(System.in);// untun input
        String nik, nama, kelamin, universitas, email, nim, fakultas, prodi;// variabel tampungan input
        System.out.print("NIK :");
        nik = sc.next();
        System.out.print("nama :");
        nama = sc.next();
        System.out.print("kelamin :");
        kelamin = sc.next();
        System.out.print("universitas :");
        universitas = sc.next();
        System.out.print("email :");
        email = sc.next();
        System.out.print("nim :");
        nim = sc.next();
        System.out.print("fakultas :");
        fakultas = sc.next();
        System.out.print("prodi :");
        prodi = sc.next();

        // memanggil method tambah untuk menambahkan data ke list
        pro.tambah(list, "1111111", "Fikri", "Laki", "2107264", "MIPA", "ILKOM", "UPI", "Fikri@gmail.com");
        pro.tambah(list, nik, nama, kelamin, nim, fakultas, prodi, universitas, email);
        // method untuk menampilkan
        pro.tampil(list);
    }

}
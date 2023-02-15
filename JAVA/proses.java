
import java.util.ArrayList;
import java.util.Scanner;

public class proses {
    //method untuk menambah data ke dalam list
    public void tambah(ArrayList<mahasiswa> list, String nik, String nama, String kelamin, String nim, String fakultas,
            String prodi, String universitas, String email) {
        //mengset data
        mahasiswa mahasiswa = new mahasiswa();
        mahasiswa.setnik(nik);
        mahasiswa.setnama(nama);
        mahasiswa.setkelamin(kelamin);
        mahasiswa.setnim(nim);
        mahasiswa.setfakultas(fakultas);
        mahasiswa.setprodi(prodi);
        mahasiswa.setuni(universitas);
        mahasiswa.setprodi(prodi);
        //add object ke dalam list
        list.add(mahasiswa);
    }

    //method untuk menampilkan data di dalam list menggunakan for loop
    public void tampil(ArrayList<mahasiswa> list) {
        
        int i = 0;
        for (i = 0; i < list.size(); i++) {
            System.out.println("Data ke " + Integer.toString(i + 1));
            System.out.println("nik : " + list.get(i).getnik());
            System.out.println("nama : " + list.get(i).getnama());
            System.out.println("kelamin : " + list.get(i).getkelamin());
            System.out.println("universitas : " + list.get(i).getuniversitas());
            System.out.println("prodi : " + list.get(i).getprodi());
            System.out.println("nim : " + list.get(i).getnim());
            System.out.println("fakultas : " + list.get(i).getfakultas());
            System.out.println("prodi : " + list.get(i).getprodi());

        }
    }
}

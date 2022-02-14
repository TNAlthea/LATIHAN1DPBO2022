import java.util.*;

public class Main{
    public static void main (String[] args){
        int n = 0;

        //input hardcode tim pertama
        TimSepakBola timSatu = new TimSepakBola();
        timSatu.setNamaTim("Chelsea");
        timSatu.setAsalNegara("Inggris");
        timSatu.setNamaPemain("Lukaku");
        timSatu.setTahunBerdiri(1905);

        //input dinamis tim kedua dan seterusnya
        Scanner sc = new Scanner(System.in);
        try{
            n = sc.nextInt();
        }catch(Exception e){}

        TimSepakBola[] timDinamis = new TimSepakBola[n];

        int i;
        int tahunBerdiri = 0;
        String namaTim = "lorem", asalNegara = "ipsum", namaPemain = "dolor";

        for (i = 0; i < n; i++){
            //antisipasi nextLine skip
            if (i == 0) sc.nextLine();

            try{
                namaTim = sc.nextLine();
            }catch(Exception e){}

            try{
                asalNegara = sc.nextLine();
            }catch(Exception e){}

            try{
                namaPemain = sc.nextLine();
            }catch(Exception e){}

            try{
                tahunBerdiri = sc.nextInt();
            }catch(Exception e){}

            //inisiasi setiap objek pada array
            timDinamis[i] = new TimSepakBola(namaTim, asalNegara, namaPemain, tahunBerdiri);
        }

        //output manual
        System.out.println("===== 1 =====");  
        System.out.println("Nama tim : " + timSatu.getNamaTim());
        System.out.println("Negara asal tim : " + timSatu.getAsalNegara());
        System.out.println("Nama pemain : " + timSatu.getNamaPemain());
        System.out.println("Tahun tim berdiri : " + timSatu.getTahunBerdiri());

        //output dengan prosedur
        for (i = 0; i < n; i++){
            System.out.printf("===== %d =====", (i+2));
            timDinamis[i].outs();
        }

    }
}

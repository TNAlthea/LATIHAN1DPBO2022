public class TimSepakBola{
    private String namaTim;
    private String asalNegara;
    private String namaPemain;
    private int tahunBerdiri;

    public TimSepakBola(String namaTim, String asalNegara, String namaPemain, int tahunBerdiri){
        this.namaTim = namaTim;
        this.asalNegara = asalNegara;
        this.namaPemain = namaPemain;
        this.tahunBerdiri = tahunBerdiri;
    }

    public TimSepakBola(){
    }

    public String getNamaTim(){
        return namaTim;
    }

    public void setNamaTim(String namaTim){
        this.namaTim = namaTim;
    }

    public String getAsalNegara(){
        return asalNegara;
    }

    public void setAsalNegara(String asalNegara){
        this.asalNegara = asalNegara;
    }

    public String getNamaPemain(){
        return namaPemain;
    }
    
    public void setNamaPemain(String namaPemain){
        this.namaPemain = namaPemain;
    }

    public int getTahunBerdiri(){
        return tahunBerdiri;
    }

    public void setTahunBerdiri(int tahunBerdiri){
        this.tahunBerdiri = tahunBerdiri;
    }

    public void outs(){
        System.out.println("\nNama tim : " + this.getNamaTim());
        System.out.println("Negara asal tim : " + this.getAsalNegara());
        System.out.println("Nama pemain : " + this.getNamaPemain());
        System.out.println("Tahun tim berdiri : " + this.getTahunBerdiri());
    }
}

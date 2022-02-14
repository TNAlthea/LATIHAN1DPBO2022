#include "bola.cpp"

//bismillahirrahmanirrahiim
/*
Nama : Sabian Annaya Havid
Program Studi/Kelas : Ilmu Komputer/C2
NIM : 2005021

Saya Sabian Annaya Havid mengerjakan Latihan dalam mata kuliah
Desain Pemograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan
seperti yang telah dispesifikasikan. Aamiin.
*/

int main(){
    /*var for loop */
    int n = 0, i = 0;

    /*user enter how many team they want to input into the program*/
    cout << "Input banyak tim: ";
    cin>>n; cout << endl;
    
    /*declaring arrays for each team details*/
    TimSepakBola daftarTim[n];  

    /*var input*/
    string tim, negara, pemain;
    int tahun;

    /*user input*/
    for (i = 0; i < n; i++){

        cout << "Input tim ke-" << i+1 << endl; 
        cout << "Masukkan Nama Tim: "; cin >> tim;
        cout << "Masukkan Asal Negara Tim: "; cin >> negara;
        cout << "Masukkan Nama Pemain: "; cin >> pemain;
        cout << "Masukkan Tahun Berdiri Tim: "; cin >> tahun; cout << endl; 
        
        /*storing data into arrays by using set function in bola.cpp*/
        daftarTim[i].setNamaTim(tim);
        daftarTim[i].setAsalNegaraTim(negara);
        daftarTim[i].setNamaPemain(pemain);
        daftarTim[i].setTahunBerdiri(tahun);

    }

    /*OUTPUT*/
    cout << "OUTPUT" << endl << endl;
    for (i = 0; i < n; i++){

        cout<< "Nama Tim [" << i+1 << "]: " << daftarTim[i].getNamaTim() << endl;
        cout<< "Asal Negara Tim [" << i+1 << "]: " << daftarTim[i].getAsalNegaraTim() << endl;
        cout<< "Nama Pemain [" << i+1 << "]: " << daftarTim[i].getNamaPemain() << endl;
        cout<< "Tahun Berdiri [" << i+1 << "]: " << daftarTim[i].getTahunBerdiri() << endl << endl;

    }

    return 0;
}

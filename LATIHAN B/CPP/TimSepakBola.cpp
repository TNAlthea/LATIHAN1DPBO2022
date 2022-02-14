#include <bits/stdc++.h>
#include <iostream>
#include <string>

using namespace std;

//bismillahirrahmanirrahiim
/*
Nama : Sabian Annaya Havid
Program Studi/Kelas : Ilmu Komputer/C2
NIM : 2005021

Saya Sabian Annaya Havid mengerjakan Latihan dalam mata kuliah
Desain Pemograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan
seperti yang telah dispesifikasikan. Aamiin.
*/

class TimSepakBola{
    private:
        /*attributes*/
        string namaTim;
        string asalNegara;
        int tahunBerdiri;
        string namaPemain;
    
    public:
        //constructor
        TimSepakBola(){
            this->namaTim = this->namaPemain = "test";
            this->tahunBerdiri = 9999;    
        }

        //constructor, but with parameter
        TimSepakBola(string namaTim, string asalNegara, int tahunBerdiri, string namaPemain){
            this->namaTim = namaTim;
            this->asalNegara = asalNegara;
            this->tahunBerdiri = tahunBerdiri;
            this->namaPemain = namaPemain;
        }  

        /* get - set for each attributes */
        void setNamaTim(string namaTim){
            this->namaTim = namaTim;
        }

        string getNamaTim(){
            return namaTim;
        }

        void setAsalNegaraTim(string asalNegara){
            this->asalNegara = asalNegara;
        }

        string getAsalNegaraTim(){
            return asalNegara;
        }

        void setNamaPemain(string namaPemain){
            this->namaPemain = namaPemain;
        }

        string getNamaPemain(){
            return namaPemain;
        }

        void setTahunBerdiri(int tahunBerdiri){
            this->tahunBerdiri = tahunBerdiri;
        }

        int getTahunBerdiri(){
            return tahunBerdiri;
        }

        /*Destructor*/
        ~TimSepakBola(){
        }

};

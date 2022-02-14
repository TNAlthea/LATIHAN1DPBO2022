from Bola import Bola

teamSatu = Bola()
teamSatu.setNamaTim("Lorem")
teamSatu.setAsalNegara("Ipsum")
teamSatu.setNamaPemain("Dolor")
teamSatu.setTahunBerdiri(1900)

teamDua = Bola("Sit", "Amet", "Consectetur", 1901)

n = int(input("Input Jumlah Tim: "))
arrTeam = [Bola() for i in range(n)]

i = 0
for i in range (n):
    NamaTim = input("Input Nama Tim: ")
    Negara = input("Input Asal Negara: ")
    NamaPemain = input("Input Nama Pemain: ")
    Tahun = int(input("Input Tahun Berdiri: "))

    arrTeam[i].setNamaTim(NamaTim)
    arrTeam[i].setAsalNegara(Negara)
    arrTeam[i].setNamaPemain(NamaPemain)
    arrTeam[i].setTahunBerdiri(Tahun)
    print("\n")

print("OUTPUT\n===== 1 =====")
teamSatu.outs()

print("\n===== 2 =====")
teamDua.outs()

i = 0
for i in range (n):
    print("\n===== %d =====" % (i + 3))
    arrTeam[i].outs()

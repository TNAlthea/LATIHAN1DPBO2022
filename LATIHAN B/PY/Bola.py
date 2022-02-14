class Bola():
    # Private members      
    __NamaTim = "Lorem"
    __AsalNegara = "Ipsum"
    __NamaPemain = "Dolor"
    __TahunBerdiri = 1900
    
    # Constructor with parameter
    def __init__(self, NamaTim = "Lorem", AsalNegara = "Ipsum", NamaPemain = "Dolor", TahunBerdiri = 1900):
        self.__NamaTim = NamaTim
        self.__AsalNegara = AsalNegara
        self.__NamaPemain = NamaPemain
        self.__TahunBerdiri = TahunBerdiri
    
    # Get Set
    def setNamaTim(self, NamaTim):
        self.__NamaTim = NamaTim

    def getNamaTim(self):
        return self.__NamaTim

    def setAsalNegara(self, AsalNegara):
        self.__AsalNegara = AsalNegara

    def getAsalNegara(self):
        return self.__AsalNegara

    def setNamaPemain(self, NamaPemain):
        self.__NamaPemain = NamaPemain

    def getNamaPemain(self):
        return self.__NamaPemain

    def setTahunBerdiri(self, TahunBerdiri):
        self.__TahunBerdiri = TahunBerdiri

    def getTahunBerdiri(self):
        return self.__TahunBerdiri
    
    # Output Function
    def outs(self):
        print("Nama Tim: %s" % (self.__NamaTim))
        print("Asal Negara: %s" % (self.__AsalNegara))
        print("Nama Pemain: %s" % (self.__NamaPemain))
        print("Tahun Berdiri: %d" % (self.__TahunBerdiri))

    

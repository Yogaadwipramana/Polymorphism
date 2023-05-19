<?php
// template untuk class dimana semua method di dalamnya harus diimplementasikan ulang oleh class yang memakainya ( mengimplementasikannya).
    interface Human {
        public function Citacita();
        public function Umur();
        public function Hobbi();
    }
//  implement untuk menerapkan suatu interface kedalam suatu class
    class Komar implements Human {
        public function Citacita() {
            return "Menjadi seoarang PNS<br/>";
        }
        public function Umur() {
            return "Umur : 35 tahun<br/>";
        }
        public function Hobbi() {
            return "Hobbi bermain bulutangkis";
        }

    }

    class siti implements Human {
        public function Citacita() {
            return "Menjadi seoarang dokter<br/>";
        }
        public function Umur() {
            return "Umur : 16 tahun<br/>";
        }
        public function Hobbi() {
            return "Hobbi bermain sepatu roda<br/>";
        }
    }

    $komar = new Komar;
    $siti = new Siti;

    echo "<b> indentitas Komar : </b><br/>";
    echo $komar -> Citacita();
    echo $komar -> Umur();
    echo $komar -> Hobbi();

    echo "<br/>";
    echo "<b> indentitas Siti : </b><br/>";
    echo $siti -> Citacita();
    echo $siti -> Umur();
    echo $siti -> Hobbi();



// adalah sebuah class yang tidak bisa di-instansiasi (tidak bisa dibuat menjadi objek) dan berperan sebagai ‘kerangka dasar’ bagi class turunannya.
abstract class Hewan {  
    abstract public function Makan();  
    abstract public function Bergerak();  
    abstract public function Beranak();  
}  
// Keyword extend di gunakan untuk mendapatkan sifat-sifat/atribut dari class induk ke dalam kelas dasar.
class Burung extends Hewan {  
    public function Makan() {  
         return "Burung makan biji-bijian<br/>";  
    }  
           
    public function Bergerak() {  
         return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";  
    }  
      
    public function Beranak() {  
         return "Burung beranak dengan bertelur<br/>";  
    }  
}  
 
class Kambing extends Hewan {  
    public function Makan() {  
         return "Kambing makan rumput<br/>";  
    }  
           
    public function Bergerak() {  
         return "Kambing bergerak dengan berjalan dan berlari<br/>";  
    }  
      
    public function Beranak() {  
         return "Kambing beranak dengan melahirkan<br/>";  
    }  
}  
 
$burung = new Burung;  
$kambing = new Kambing;  
 
echo "<b>Perilaku Burung : </b><br/>";  
echo $burung->Makan();  
echo $burung->Bergerak();  
echo $burung->Beranak();  
 
echo "<br/>";  
echo "<b>Perilaku Kambing : </b><br/>";  
echo $kambing->Makan();  
echo $kambing->Bergerak();  
echo $kambing->Beranak();


// PERBEDAAN YANG KITA CARI!

// dari penulisan abstract menggunakan extends dan interface menggunakan implement

// abstract class sebenarnya adalah sebuah class, sehingga memiliki semua sifat dari class biasa (punya konstruktor).
// hanya saja sifatnya masih abstrak, karena itu biasanya method kosong/belum di implementasikan.
//Interface adalah sebuah blok signature kumpulan method tanpa tubuh (konstan).

// abstract class didepannya menggunakan absract publik function pada abstract method = abstract public function Makan();
// apabila interface langsung public function, tidak menggunakan awalan interface seperti pada abstract class = public function Makan();  

// abstract class harus menggunakan class di depan classnya = abstract class ayam{}
// interface tidak usah menggunakan class di depan classnya = interface ayam{}

// kalo kita menggunakan implement kita tidak bisa sekaligus menggunakan extends
// apabila kita menggunakan extends bisa sekaligus menggunakan implement
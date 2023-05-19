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
    ?>

<?php
// interface merupakan sebuah kontrak ataupun perjanjian dari implementasi method atau fungsi. Bagi class yang menggunakan
//  object interface, class tersebut harus mengimplementasikan ulang seluruh fungsi yang ada di dalam interface.
interface human {
    public function kebiasaan();
    public function hobi();
    public function makanan();
}
// implement untuk menerapkan suatu interface kedalam suatu class
class rudi implements human {
    public function kebiasaan(){
    return "main hp sambil tiduran</br>";
}

public function hobi(){
    return "melamun </br>";
}
public function makanan(){
    return "makanan kesukaan nya adalah roti abon</br>";
}

}

class ucup implements human {
    public function kebiasaan(){
    return "makan beras mentah</br>";
}

public function hobi(){
    return "mancing </br>";
}
public function makanan(){
    return "makanan kesukaan nya salmon</br>";
}

}


class rusdi implements human {
    public function kebiasaan(){
    return "tersenyum sambil makan</br>";
}

public function hobi(){
    return "cukur rambut</br>";
}
public function makanan(){
    return "makanan kesukaan nya adalah kakap</br>";
}
}

$rudi = new rudi;
$ucup = new ucup;
$rusdi = new rusdi;

echo "<b>perilaku rudi </b></br>";
echo $rudi->kebiasaan();
echo $rudi->hobi();
echo $rudi->makanan();

echo "</br>";
echo "<b>perilaku ucup : </b></br>";
echo $ucup->kebiasaan();
echo $ucup->hobi();
echo $ucup->makanan();

echo "</br>";
echo "<b>perilaku rusdi : </b></br>";
echo $rusdi->kebiasaan();
echo $rusdi->hobi();
echo $rusdi->makanan();

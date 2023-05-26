<?php 
class Aritmatika {
    private $angka1;
    protected $angka2;

    public function __construct($angka1, $angka2){
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }
    public function tambah(){
        return $this->angka1 + $this->angka2;
    }

    public function kurang(){
        return $this->angka1 - $this->angka2;
    }

    public function kali(){
        return $this->angka1 * $this->angka2;

    }

    public function bagi(){
        return $this->angka1 / $this->angka2;
    }

    public function modulus(){
        return $this->angka1 % $this->angka2;
    }

}

    class kalkulator extends aritmatika{
        public function hasil(){
        echo "Data penjumlahan :". $this->tambah(). "<hr>";
        echo "Data pengurangan :". $this->kurang(). "<hr>";
        echo "Data perkalian :". $this->kali(). "<hr>";
        echo "Data pembagian :". $this->bagi(). "<hr>";
        echo "Data modulus :". $this->modulus(). "<hr>";
          
    }

}
    $aritmatika = new Kalkulator(20, 2);
    
    $aritmatika->hasil();
 
    
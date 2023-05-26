<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika</title>
</head>
<body>
<form action="#" method="post">
        <input type="number" name="angka1" id="angka1">
        <input type="number" name="angka2" id="angka2">
    <input type="submit" name="kirim" value="operasikan">
    </form>
    
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
    
    if(isset($_POST['kirim'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $aritmatika = new kalkulator($angka1, $angka2);
        $aritmatika->hasil();

    }

 ?>
    
    </body>
    </html>
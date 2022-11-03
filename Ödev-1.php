<?php

/*
Uygulama-1


1. Kendi belirlediğimiz isimle bir sınıf oluşturunuz
2.comstract metodunda 3 tane değişken alarak değişkenleri sınıf içerisndeki değişkenlere atayınız
3. sınıf içerisnde public 2 tane metot yazınız
4. birinci metotta  girilen sayının karesi ekrana yazdırılsın
5. ikinci metotta   girilen sayıya kadar  sayıların  karesi alt alta  ekrana yazdırılsın

*/

class Ödev
{      
    public function __construct( $nickname, $oyunname, $no)
    {
        $connection = " $nickname, $oyunname, $no";
        return $connection;
    }

    public $nickname = "DBlanee";
    public $oyunname = "DBlane#Twtch";
    public $no =265;

    
    public function write()
    {
        function karesi($sayi)
        {
        return $sayi*$sayi;
        }
        $sonuc="6 Sayısının Karesi:".karesi(6);
        echo "<br>";
        echo $sonuc;
        
    }

    public function Sayılar($sayilar){
        for ($i=0; $i < $sayilar; $i++) { 
            echo $i*$i;
            echo "<br>";
        }
    }
}
$nesne = new Ödev("berkaykayaogullari.site", "berkayka", "123", "dblanee");
print_r($nesne);
echo $nesne->write();
echo "<br>";
$nesne->Sayılar(5);
?>
<?php
/*
Uygulama - 2
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metotunda bir karşılama mesajını ekrayan yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. Sınıf içerisine public 2 tane metot yazınız.
5. Birinci metotda parametre gönderilen vize ve final notlarını alarak ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotta parametre olarak gelen sayının faktöryel hesabını yaparak ekrana sonucunu yazdırınız.
*/


class Ödev2 {

   public function __construct(){
    $mesage="Hoşgeldiniz...  Karşılama mesajı çalıştı.";
    echo $mesage;
    echo "<br>";
}

public function __destruct()
{
    echo "Yıkıcı metot çalıştı.";
    echo "<br>";
}


public function Sınav($vize,$final){
            
    $not=$vize*0.3 + $final*0.7;
    if ($not>=50) {
        echo "Geçtiniz,notunuz: " . $not;  
        echo "<br>";  
    }
    else{
        echo "Kaldınız";
        echo "<br>";
    }
}

public function fak($sayi){
    $toplam=1;
   for ($i=1; $i <= $sayi; $i++) { 
    $toplam=$i*$toplam;
   }
   echo "$sayi'ın faktöryeli ".$toplam;
   echo "<br>";
}
}

$dblanee = new Ödev2();
$dblanee-> Sınav(50,80);
$dblanee-> fak(7);



?>
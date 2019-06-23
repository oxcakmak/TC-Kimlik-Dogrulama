<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/
$client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
try {
    $result = $client->TCKimlikNoDogrula([
        'TCKimlikNo' => '123456789101',
        'Ad' => 'deneme',
        'Soyad' => 'deneme',
        'DogumYili' => '1984'
    ]);
    if ($result->TCKimlikNoDogrulaResult) {
        echo 'True';
    } else {
        echo 'False';
    }
} catch (Exception $e) {
    echo $e->faultstring;
}
?>

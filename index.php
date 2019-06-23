<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/
function verifyTCKimlik($tcNo, $tcAd, $tcSoyad, $tcYil){
    $client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
    try {
        $result = $client->TCKimlikNoDogrula([
            'TCKimlikNo' => $tcNo,
            'Ad' => $tcAd,
            'Soyad' => $tcSoyad,
            'DogumYili' => $tcYil
        ]);
        if ($result->TCKimlikNoDogrulaResult) {
            return 'True';
        } else {
            return 'False';
        }
    } catch (Exception $e) {
        return $e->faultstring;
    }
}
?>

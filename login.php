<?php
if (isset($_POST['gonder'])) {
    $girismail = $_POST['email'];
    $girispin = $_POST['pin'];
    $parola = trim($girismail, "@ogr.sakarya.edu.tr");
    if ($girispin == $parola) {
        header("Refresh:5; url=/index.html");

        echo "ŞİFRE GİRİŞİ DOĞRU. <br> HOŞGELDİNİZ $parola. <br>";
        echo "ANASAYFAYA YÖNLENDİRİYORSUNUZ... ";
    } else {
        header("Refresh:5; url=/login.html");
        echo "ŞİFRE GİRİŞİ YANLIŞ. <br> GİRİŞ SAYFASINA YÖNLENDİRİLİYOR...";
    }
}
?>
<?php
if (isset($_POST['gonder'])) {
    $girismail = $_POST['mail'];
    $girispin = $_POST['pin'];
    $parola = trim($girismail, "@ogr.sakarya.edu.tr");
    if ($girispin == $parola) {
        header("Refresh:5; url=/index.html");
        echo "Şifre girişi doğru. Hoşgeldiniz $parola ";
    } else {
        header("Refresh:5; url=/login.html");
        echo "Şifre girişi başarısız.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/resim/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/resim/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/resim/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burak Odabaş | Giriş Yap</title>
    <style>
        html {
            background: rgb(121, 167, 168);
            background: linear-gradient(90deg, rgba(121, 167, 168, 1) 30%, rgba(53, 92, 125, 1) 70%);

        }

        .orta {
            width: 40%;
            height: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 2rem;
            border-radius: 20px;
            padding: 4rem;
        }
    </style>
</head>

<body>
    <div class="orta">
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
    </div>

</body>

</html>
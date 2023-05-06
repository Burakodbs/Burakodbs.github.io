<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            background-color: #79A7A8;
            font-size: 5rem;
            text-align: center;
        }

        .orta {
            width: 1200px;
            font size: 5rem;
            height: 300px;
            background-color: #79A7A8;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -600px;
            margin-top: -150px;
        }
    </style>
</head>

<body>
    <div class="orta">
        <?php
        if (isset($_POST['gonder'])) {
            $girismail = $_POST['mail'];
            $girispin = $_POST['pin'];
            $parola = trim($girismail, "@ogr.sakarya.edu.tr");
            if ($girispin == $parola) {
                header(" url=/index.html");
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
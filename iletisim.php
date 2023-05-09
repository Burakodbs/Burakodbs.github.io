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
    <title>Burak Odabaş | İletişim</title>
    <style>
        html {
            background: rgb(121, 167, 168);
            background: linear-gradient(90deg, rgba(121, 167, 168, 1) 30%, rgba(53, 92, 125, 1) 70%);

        }

        .orta {
            width: 40%;
            height: auto;
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
        if (isset($_POST['submit'])) {
            $adsoyad = $_POST['adsoyad'];
            $cinsiyet = $_POST['cinsiyet'];
            $dg = $_POST['dg'];
            $renk = $_POST['renk'];
            $dosya = $_POST['dosya'];
            $sehir = $_POST['sehir'];
            $uni = $_POST['uni'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $konu = $_POST['konu'];
            $mesaj = $_POST['mesaj'];
            echo ("AD SOYAD: $adsoyad<br>");
            echo ("CİNSİYET: $cinsiyet<br>");
            echo ("DOĞUM GÜNÜ: $dg<br>");
            echo ("RENK: $renk<br>");
            echo ("DOSYA: $dosya<br>");
            echo ("ŞEHİR: $sehir<br>");
            echo ("ÜNİVERSİTE: $uni<br>");
            echo ("TELEFON NUMARASI: $tel<br>");
            if (isset($_POST['amac1'])) {
                echo ("***İş teklifi verilecek.***<br>");
            }
            if (isset($_POST['amac2'])) {
                echo ("***Reklam teklifi verilecek.***<br>");
            }
            if (isset($_POST['amac3'])) {
                echo ("***Danışma hizmeti verilecek.***<br>");
            }
            echo ("E POSTA ADRESİ: $email<br>");
            echo ("KONU: $konu<br>");
            echo ("MESAJ: $mesaj<br>");






        }
        ?>
    </div>
</body>

</html>
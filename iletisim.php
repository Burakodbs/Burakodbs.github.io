<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            background-color: #355C7D;
        }

        .orta {
            width: 800px;
            height: 600px;
            padding: 20px;
            background-color: #79A7A8;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -400px;
            margin-top: -300px;
            text-align: center;
            font-size: 2rem;
            border-radius: 20px;
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
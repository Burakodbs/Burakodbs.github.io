function formKontrol() {

    var adsoyad = document.forms["contact"]["adsoyad"].value;
    var cinsiyet = document.forms["contact"]["cinsiyet"].value;
    var dg = document.forms["contact"]["dg"].value;
    var renk = document.forms["contact"]["renk"].value;
    var dosya = document.forms["contact"]["dosya"].value;
    var sehir = document.forms["contact"]["sehir"].value;
    var uni = document.forms["contact"]["uni"].value;
    var amac1 = document.getElementById("amac1").checked;
    var amac2 = document.getElementById("amac2").checked;
    var amac3 = document.getElementById("amac3").checked;
    var tel = document.forms["contact"]["tel"].value;
    var email = document.forms["contact"]["email"].value;
    var konu = document.forms["contact"]["konu"].value;
    var mesaj = document.forms["contact"]["mesaj"].value;
    var emailFormat = /\S+@+\S+/;
    var telefonFormat = /[0-9]/;

    var genelKontrol = cinsiyet == "" || adsoyad == "" || dg == "" || renk == "" || dosya == "" || sehir == "" || uni == "" || (amac1 == false && amac2 == false && amac3 == false) || email == "" || konu == "" || mesaj == "";
    if (genelKontrol) {
        alert("Lütfen tüm alanları doldurunuz.");
        return false;
    } else {
        if (!emailFormat.test(email)) {
            alert("Lütfen e postanızı doğru formatta giriniz.");
            return false;
        }
        else if(!telefonFormat.test(tel) || (telefonFormat.test(tel) && tel.length != 10)) {
            alert("Lütfen telefon numaranızı kontrol ediniz.");
            return false;
        }
    }
}
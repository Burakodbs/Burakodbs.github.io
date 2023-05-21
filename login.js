function formKontrol() {
    var email = document.forms["login"]["email"].value;
    var pin = document.getElementById('pin');
    var emailFormat = /\S+@ogr.sakarya.edu.tr/;
    if (email == "") {
        alert("E posta boş geçilemez.");
        return false;
    }
    if (!emailFormat.test(email)) {
        alert("Sadece ogr.sakarya.edu.tr alan adına sahip mailler kabul edilir.");
        return false;
    }
    if (pin.value == "") {
        alert("Şifre boş geçilemez.");
        return false;
    }
}
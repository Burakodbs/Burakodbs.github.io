function validateForm() {
  var adsoyad = document.forms["contact"]["adsoyad"].value;
  var cinsiyet = document.forms["contact"]["cinsiyet"].value;
  var dg = document.forms["contact"]["dg"].value;
  var renk = document.forms["contact"]["renk"].value;
  var dosya = document.forms["contact"]["dosya"].value;
  var sehir = document.forms["contact"]["sehir"].value;
  var uni = document.forms["contact"]["uni"].value;
  var amac1 = document.forms["contact"]["amac1"].value;
  var amac2 = document.forms["contact"]["amac2"].value;
  var amac3 = document.forms["contact"]["amac3"].value;
  var tel = document.forms["contact"]["tel"].value;
  var email = document.forms["contact"]["email"].value;
  var konu = document.forms["contact"]["konu"].value;
  var mesaj = document.forms["contact"]["mesaj"].value;
  if (adsoyad == "") {
    alert("Ad soyad boş bırakılamaz.");
    return false;
  };
}
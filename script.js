"use strict";
  var formGiris = document.forms["iletisim"];  // form seçimi
  var eposta = formGiris.eposta;   // eposta alanı seçimi
  var sifre = formGiris["tel"];  // sifre alanı seçimi

  formGiris.onsubmit = function() {
    if (eposta.value != "" && sifre.value != "") {
      alert(eposta.value);  // eposta alanı value özelliği
      alert(sifre.value);   // sifre alanı value özelliği
    } else {
      alert("Tüm alanları doldurun !");
      return false;  // form gönderimini iptal et
    }
  }
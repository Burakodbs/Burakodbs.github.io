function formKontrol() {
    var email = document.forms["login"]["email"].value;
    var emailFormat = /\S+@ogr.sakarya.edu.tr+/;
    if (!emailFormat.test(email)) {
            alert("Sadece ogr.sakarya.edu.tr alan adına sahip mailler kabul edilir.");
            return false;
        }
}
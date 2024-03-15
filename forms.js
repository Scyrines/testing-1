// forms.js
function submitForm() {
    var names = document.frmResult.name.value;
    var address = document.frmResult.address.value;
    var city = document.frmResult.city.value;
    var email = document.frmResult.email.value;
    var result = "Name: " + names + "\n" + "Address: " + address + "\n" + "City: " + city + "\n" + "E-mail: " + email + "\n";

    document.frmResult.results.value = result;

    // Return false to prevent the default form submission behavior
    return false;
}

function resetForm() {
    document.frmResult.name.value = "";
    document.frmResult.address.value = "";
    document.frmResult.city.value = "";
    document.frmResult.email.value = "";
    document.frmResult.results.value ="";
}

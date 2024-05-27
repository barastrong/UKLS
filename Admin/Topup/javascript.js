function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var namePattern = /^[A-Za-z0-9]+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!namePattern.test(name)) {
        alert("Masukkan format User ID dengan benar.");
        return false;
    }

    if (email !== "" && !emailPattern.test(email)) {
        alert("Masukkan email dengan format yang benar.");
        return false;
    }

    return true;
}

function validate_textfields() {
    const firstname = document.getElementById("firstname").value;
    const lastname = document.getElementById("lastname").value;

    

    if (firstname === "" || lastname === "") {
        alert("Please fill in all fields.");
        return false;
    }

    if(firstname.trim().length < 2 || lastname.trim().length < 2) {
        alert("First name and last name must be at least 2 characters long.");
        return false;
    }

    return true;
}
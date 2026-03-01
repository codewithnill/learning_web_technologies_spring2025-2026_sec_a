// this code is only for 8.html that is all in one validation code
function validateprofile() {
    // name validation
    const name = document.getElementById('namebox').value;
    
    if (name.trim() === '') {
        alert('Name cannot be empty');
        return false;
    }
    
    const words = name.trim().split(' ');
    if (words.length < 2) {
        alert('Name must contain at least two words');
        return false;
    }
    
    for (let i = 0; i < name.length; i++) {
        const char = name[i];
        if (!((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z') || char === '.' || char === '-' || char === ' ')) {
            alert('Name can only contain letters, dots, dashes and spaces');
            return false;
        }
    }
    
    const firstChar = name.trim()[0];
    if (!((firstChar >= 'a' && firstChar <= 'z') || (firstChar >= 'A' && firstChar <= 'Z'))) {
        alert('Name must start with a letter');
        return false;
    }





    
    // email validation
    const email = document.getElementById('emailbox').value;
    
    if (email.trim() === '') {
        alert('Email cannot be empty');
        return false;
    }
    
    if (email.indexOf('@') === -1) {
        alert('Email must contain @ symbol');
        return false;
    }
    
    const atPosition = email.indexOf('@');
    const afterAt = email.substring(atPosition + 1);
    
    if (afterAt.indexOf('.') === -1) {
        alert('Email must contain dot (.) after @');
        return false;
    }
    







    // gender validation
    const genderRadios = document.getElementsByName('gender');
    let genderSelected = false;
    
    for (let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            genderSelected = true;
            break;
        }
    }
    
    if (!genderSelected) {
        alert('Please select a gender');
        return false;
    }
    





    // dob validation
    const day = document.getElementById('dd').value;
    const month = document.getElementById('mm').value;
    const year = document.getElementById('yyyy').value;
    
    if (day.trim() === '' || month.trim() === '' || year.trim() === '') {
        alert('Date of birth fields cannot be empty');
        return false;
    }
    
    const d = parseInt(day);
    const m = parseInt(month);
    const y = parseInt(year);
    
    if (isNaN(d) || isNaN(m) || isNaN(y)) {
        alert('Please enter valid numbers for date of birth');
        return false;
    }
    
    if (d < 1 || d > 31) {
        alert('Day (dd) must be between 1 and 31');
        return false;
    }
    
    if (m < 1 || m > 12) {
        alert('Month (mm) must be between 1 and 12');
        return false;
    }
    
    if (y < 1900 || y > 2016) {
        alert('Year (yyyy) must be between 1900 and 2016');
        return false;
    }
    
    
    



    // bloodgroup validation
    const bloodGroup = document.getElementById('bloodgroup').value;
    
    if (bloodGroup === '') {
        alert('Please select a blood group');
        return false;
    }
    




    // degree validation
    const degreeCheckboxes = document.getElementsByName('degree');
    let degreeSelected = false;
    
    for (let i = 0; i < degreeCheckboxes.length; i++) {
        if (degreeCheckboxes[i].checked) {
            degreeSelected = true;
            break;
        }
    }
    
    if (!degreeSelected) {
        alert('Please select at least one degree');
        return false;
    }






    
    // photo validation
    const photo = document.getElementById('file');
    
    if (photo.files.length === 0) {
        alert('Please select a profile picture');
        return false;
    }
    




    // if all validation passes
    alert('Profile submitted successfully!');
    return true;
}
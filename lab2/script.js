// for 1.html
function validateName() { // for 1.html name validation
    const name = document.getElementById('namebox1').value;
    // document.getElementById('namebox1') -> Finds an HTML element by its id attribute (like finding a box by its label)
    // .value -> Gets the text that a user typed into an input field

    
    if (name.trim() === '') {
        // .trim -> Removes empty spaces from the beginning and end of text
        alert('Name cannot be empty');
        return false;
    }
    
    const words = name.trim().split(' '); //storing words in array. ' ' is the separator
    // .split-> Cuts a string into pieces and puts them in an array (like cutting a sentence into words)
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
    
    alert('Valid name!');
    return true;
}

// for 2.html
function validateEmail() {
    const email = document.getElementById('emailbox1').value;
    
    // Cannot be empty
    if (email.trim() === '') {
        alert('Email cannot be empty');
        return false;
    }
    
    // Must contain @
    if (email.indexOf('@') === -1) {
        // .indexOf() -> Returns the index (position) of the first occurrence of a value in a string
        alert('Email must contain @ symbol');
        return false;
    }
    
    // Check if dot comes after @
    const atPosition = email.indexOf('@');
    const afterAt = email.substring(atPosition + 1);
    // .substring -> extracts characters from start to end (exclusive).

    
    if (afterAt.indexOf('.') === -1) {
        alert('Email must contain dot (.) after @');
        return false;
    }
    
    alert('Valid email!');
    return true;
}

// 3.html
function validateGender() {
    const genderRadios = document.getElementsByName('gender'); // This returns a NodeList (collection) of all elements that have name="gender".
    
    for (let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) { // The checked property sets or returns the checked state of a checkbox/radio
            alert('Gender selected!');
            return true; // gender selected, valid!
        }
    }
    
    alert('Please select a gender');
    return false; // No selection found
}
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
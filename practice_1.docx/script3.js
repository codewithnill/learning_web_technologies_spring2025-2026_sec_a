// const age=document.getElementById("age");

// if(age.value!="") {
//     if(age.value<40) {
//     alert("To be a part of the community, you need to at least 40");
//     } else if(age.value>=40 && age.value<=50) {
//         alert("You are the youngsters of this community");
//     } else if(age.value>50) {
//         alert("Top level members of the group");    
//     }
// }

const ageInput = document.getElementById("age");
const messageDisplay = document.getElementById("message");

ageInput.addEventListener("input", function() {
    const ageValue = parseInt(this.value);
    
    if(this.value !== "") {
        if(ageValue < 40) {
            messageDisplay.textContent = "To be a part of the community, you need to at least 40";
            messageDisplay.style.color = "black";
        } else if(ageValue >= 40 && ageValue <= 50) {
            messageDisplay.textContent = "You are the youngsters of this community";
            messageDisplay.style.color = "black";
        } else if(ageValue > 50) {
            messageDisplay.textContent = "Top level members of the group";
            messageDisplay.style.color = "red";
        }
    } else {
        messageDisplay.textContent = "";
    }
});
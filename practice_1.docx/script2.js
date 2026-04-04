//const username = document.getElementById("username").value; 

const username = document.getElementById("username");
// const upper_username = username.toUpperCase();
username.addEventListener("input", function() {
    const upper_username = username.value.toUpperCase();
    this.value = this.value.toUpperCase();
});

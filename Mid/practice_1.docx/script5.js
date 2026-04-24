const btn = document.getElementById("button");
const body=  document.body;

btn.addEventListener("click", function() {
    // Generate random RGB values between 0 and 255
    const red = Math.floor(Math.random() * 256);
    const green = Math.floor(Math.random() * 256);
    const blue = Math.floor(Math.random() * 256);
    
    // Create RGB color string
    const randomColor = `rgb(${red}, ${green}, ${blue})`;
    
    // Apply color to body background
    body.style.backgroundColor = randomColor;
});

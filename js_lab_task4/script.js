const unit_price = 1000;

const quantityInput = document.getElementById('quantity'); // quanity input
const totalInput = document.getElementById('total'); // price input

//  calculate and update total price
function update_total() {
    // Get the quantity value
    let quantity = quantityInput.value;
    
    // Convert to number (empty input becomes 0)
    if(quantity === '') {
        quantity = 0;
    } else {
        quantity = parseInt(quantity);
    }
    
    // if negative values detected
    if (quantity < 0) {
        // Reset to 0 if negative
        quantityInput.value = 0;
        quantity = 0;
        
        
        alert('Quantity cannot be negative! Reset to 0.');
    }
    
    // total price calculating
    const total = unit_price * quantity;
    
    // Update total display with BDT currency
    totalInput.value = total + ' BDT';
    
    // Check for gift coupon eligibility
    if (total > 1000) {
        alert('You are eligible for a gift coupon');
    }
}

// Initial calculation (for default value 0)
// whenever the user types something in the quantity input or clicks the spinner arrows, the update_total() function is called
// so that the total updates automatically. 
quantityInput.addEventListener('input', update_total);

update_total(); // runs the function immediately when the page loads

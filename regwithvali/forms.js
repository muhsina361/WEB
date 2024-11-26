function validation() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;
    
    if (password !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return false;  // Prevent form submission
    }

    var phone = document.getElementById('phone').value;
    var phonePattern = /^\d{10}$/;  // Regular expression for 10 digits
    if (phone && !phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;  // Prevent form submission
    }

    return true;
}

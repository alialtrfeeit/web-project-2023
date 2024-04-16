document.getElementById("loginForm").addEventListener("submit", function(event) {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (!email || !password) {
        event.preventDefault(); // Prevent form submission
        // Display error messages
        if (!email) {
            document.getElementById("emailError").innerText = "Email is required";
        } else {
            document.getElementById("emailError").innerText = "";
        }
        if (!password) {
            document.getElementById("passwordError").innerText = "Password is required";
        } else {
            document.getElementById("passwordError").innerText = "";
        }
    }
});
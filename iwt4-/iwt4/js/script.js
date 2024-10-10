// Function to handle login form submission
function login() {
    // Get input values
    var username = document.getElementsByName("Username");
    var password = document.getElementsByName("Password");

    // Perform validation (you can add more validation if needed)
    if (username === "" || password === "") {
        alert("Please enter both username and password.");
        return;
    }

    // Send AJAX request to the server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Successful login
                var response = xhr.responseText;
                if (response === "success") {
                    alert("Login successful.");
                    // Redirect to the home page or perform any other actions
                } else {
                    alert("Invalid username or password.");
                }
            } else {
                // Error during AJAX request
                alert("Error: " + xhr.status);
            }
        }
    };
    // Prepare the request data
    var data = "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password);
    // Send the request
    xhr.send(data);
}

// Attach event listener to login form submit button
var loginForm = document.querySelector(".form.login form");
loginForm.addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent the form from submitting normally
    login(); // Call the login function
});

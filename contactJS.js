function validateForm() {
    var sender = document.forms["contactForm"]["sender"].value;
    var email = document.forms["contactForm"]["email"].value;
    var message = document.forms["contactForm"]["message"].value;

    // Check if fields are empty
    if (sender === "") {
        alert("Name must be filled out");
        return false;
    }
    if (email === "") {
        alert("Email must be filled out");
        return false;
    }
    if (message === "") {
        alert("Message must be filled out");
        return false;
    }

    // Check email format using regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailPattern)) {
        alert("Invalid email address");
        return false;
    }
}

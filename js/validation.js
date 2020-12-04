const name = document.getElementById("name");
const nameEmail = document.getElementById("nameemail");
const uid = document.getElementById("uid");
const email = document.getElementById("email");
const pwd = document.getElementById("pwd");
const pwdRepeat = document.getElementById("pwdrepeat");

// All elemenmts
const elements = document.querySelectorAll("#form input")

const form = document.getElementById("form");
const errorMessage = document.getElementById("errormessage");

form.addEventListener("submit", (event) => {
    const messages = [];
    
    // Only letters and space in name
    const lettersAndSpace = /^[a-zA-Z\s]*$/;
    if (name != null && !lettersAndSpace.test(name.value)) {
        messages.push("<p>The name can only be letters and spaces</p>");
    }

    // Email
    const emailPattern = /\S+@\S+\.\S+/;
    if (email != null && !emailPattern.test(email.value)) {
        messages.push("<p>Please fill in a valid email address</p>");
    }

    const userNamePattern = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
    // Name and emailcombined
    if (nameEmail != null) {
        if (!userNamePattern.test(nameEmail.value) || !emailPattern.test(nameEmail.value)) {
            messages.push("<p>Username can only consist of letters, numbers, hyphens and dashes, emails must be valid</p>");
        }
    }

    if (uid != null && !userNamePattern.test(uid.value)) {
        messages.push("<p>Username can only consist of letters, numbers, hyphens and dashes</p>")
    }

    // Password longer than 2
    if (pwd != null && pwd.value.length < 3) {
        messages.push("<p>Password must be 3 characters or longer</p>");
    }

    // Same password in repeat password
    if (pwd != null && pwdRepeat != null) {
        if (pwd.value !== pwdRepeat.value) {
            messages.push("<p>The repeated password do not match the password</p>");
        }
    }

    // Check the length of all elements
    for (let i = 0; i < elements.length; i++) {
        if (elements[i].value.length > 128) {
            messages.push("<p>No input field can contain more than 128 characters</p>")
        }
    }
    
    //Print messages and stop submit
    if (messages.length > 0) {
        event.preventDefault();
        errorMessage.insertAdjacentHTML("beforeend", `${messages.join("")}`);
    }
    
  });
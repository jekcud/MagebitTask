// Form validation

let error = document.getElementById("error");
let inputEmail = document.getElementById("inputEmail");
let checkbox = document.getElementById("checkboxId");
let form = document.getElementById("form");
let invalidEmailError = "Please provide a valid e-mail address";
let markTheCheckbox = "You must accept the terms and conditions";
let noEmailAddress = "Email address is required";
let noColombiaEmails =
  "We are not accepting subscriptions from Colombia emails";
let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
let ColombiaEmailsPattern = /^[^ ]+@[^ ]+\.[co]{2}$/;

form.addEventListener("submit", (e) => {
  let email = inputEmail.value;
  if (inputEmail.value === "" || inputEmail.value == null) {
    error.innerText = noEmailAddress;
    e.preventDefault();
  } else if (!checkbox.checked) {
    error.innerText = markTheCheckbox;
    e.preventDefault();
  } else if (!email.match(pattern)) {
    error.innerText = invalidEmailError;
    e.preventDefault();
  } else if (email.match(ColombiaEmailsPattern)) {
    error.innerText = noColombiaEmails;
    e.preventDefault();
  } else {
    let content = document.getElementById("content");
    content.style.display = "none";
    let contentSuccess = document.getElementById("contentSuccess");
    contentSuccess.style.display = "block";
  }
});

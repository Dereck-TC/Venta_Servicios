let email = document.getElementById("email");
let password = document.getElementById("password");
let btnLogin = document.getElementById("btnLogin");

btnLogin.onclick = async function (e) {
  e.preventDefault();
  let emailValue = email.value;
  let passwordValue = password.value;

  if (emailValue == "") {
    alert("Please enter your email");
    email.focus();
    return false;
  }
  if (passwordValue == "") {
    alert("Please enter your password");
    password.focus();
    return false;
  }

  const response = await fetch("../src/services/UserService.php?action=login", {
    method: "POST",
    body: JSON.stringify({ email: emailValue, password: passwordValue }),
  });
};

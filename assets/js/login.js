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

  let formData = new FormData();
  formData.append("email", emailValue);
  formData.append("password", passwordValue);

  const response = await fetch("../src/services/UserService.php?action=login", {
    method: "POST",
    body: formData,
  });
  const data = await response.json();
  if (data.status === "success") {
    window.location.href = "./";
  } else {
    alert("Invalid email or password");
  }
};

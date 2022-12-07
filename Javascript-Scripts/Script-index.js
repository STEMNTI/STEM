let visLog = 0;
window.addEventListener("load", () => {
  login_box = document.getElementById("login-box");
  /*  register_box = document.getElementById('register-box');
    login_register_button = document.getElementById('login-button'); */
});

function ShowAndHide() {
  if (visLog % 2 == 1) {
    login_box.style.display = "initial";
    /* register_box.style.display = 'none';
         login_register_button.innerHTML = "Register here!"; */
    visLog--;
  } else {
    login_box.style.display = "none";
    /* register_box.style.display = 'block';
         login_register_button.innerHTML = "Login here!"; */
    visLog++;
  }
}

function show() {
  document.querySelector(".hamburger").classList.toggle("open");
  document.querySelector(".navigation").classList.toggle("active");
}

function show1() {
  document.getElementById("dropdown1").classList.toggle("show");
}

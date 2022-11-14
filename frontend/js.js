let visLog = 0;
window.addEventListener("load", function() {
    login_box = document.getElementById('login-box');
    register_box = document.getElementById('register-box');
})
 function ShowAndHide() {
    if (visLog % 2 == 1) {
        login_box.style.display = 'none';
        register_box.style.display = 'inital';
        visLog--;
    } else {
        login_box.style.display = 'initial';
        register_box.style.display = 'none';
        visLog++;
    }
};  
function show(){
    document.querySelector('.hamburger').classList.toggle('open')
    document.querySelector('.navigation').classList.toggle('active')
}
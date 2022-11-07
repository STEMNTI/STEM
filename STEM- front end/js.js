let visLog = 0;
window.addEventListener("load", function() {
    login_box = document.getElementById('login-box');
})
 function ShowAndHide() {
    if (visLog % 2 == 1) {
        login_box.style.display = 'none';
        visLog--;
    } else {
        login_box.style.display = 'initial';
        visLog++;
    }
};  
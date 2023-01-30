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
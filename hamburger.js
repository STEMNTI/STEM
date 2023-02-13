/*
 visLog är non-descriptive förkortning. 
 Den är också undefined, är det en glob så det kmmr alltid att bli false
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
*/
function show(){
    document.querySelector('.hamburger').classList.toggle('open');
    document.querySelector('.navigation').classList.toggle('active');
}
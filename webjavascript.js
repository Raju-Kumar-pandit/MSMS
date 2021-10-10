var m = document.querySelector('#menu-btn');
var n = document.querySelector('.navbar');
m.onclick = () =>{
    m.classList.toggle('fa-times');
    n.classList.toggle('active');
}
window.onscroll = () =>{
    m.classList.remove('fa-times');
    n.classList.remove('active');
}

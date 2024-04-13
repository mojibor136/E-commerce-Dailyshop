

window.addEventListener('scroll', function () {
  let header = document.querySelector('header');
  if (pageYOffset >= 200) {
    header.classList.add('sticky_header');
  } else {
    header.classList.remove('sticky_header');
  }
});
var btntrue = true;

let dropdownBar = document.querySelector('.dropdown-bar');
let menuBar = document.querySelector('.menu-bar');
dropdownBar.addEventListener('click', function () {
  menuBar.style.display = 'block';
});
const account = document.querySelector('.account');
const menu = document.querySelectorAll('.menu');
account.addEventListener('click', function () {
  menu.forEach(menuitem => {
    if (btntrue) {
      menuitem.style.visibility = 'visible';
    } else {
      menuitem.style.visibility = 'hidden';
    }
  });
  btntrue = !btntrue;
});
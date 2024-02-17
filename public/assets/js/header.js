

window.addEventListener('scroll', function () {
  let header_three = document.querySelector('.header-tow-ul');
  let header = document.querySelector('header');
  if (pageYOffset >= 200) {
    header_three.classList.add('sticky_header_tow');
    header.classList.add('sticky_header');
  } else {
    header.classList.remove('sticky_header');
    header_three.classList.remove('sticky_header_tow');
  }
});

let btntrue = true;
const dropdownBar = document.querySelector('.dropdown-bar');
const menuBar = document.querySelector('.menu-bar');
const searchBox = document.querySelector('.search-box');

dropdownBar.addEventListener('click', function () {
  if (btntrue) {
    menuBar.classList.add('menu-bar-block');
    searchBox.classList.add('border');
  }
  else {
    menuBar.classList.remove('menu-bar-block');
    searchBox.classList.remove('border');
  }
  btntrue = !btntrue;
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
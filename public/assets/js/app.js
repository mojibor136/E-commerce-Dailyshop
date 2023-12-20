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

let bigImg = document.querySelector('.big-img img');
function showImg(pic) {
  bigImg.src = pic;
}


const button = document.querySelector('#button');
const menu = document.querySelectorAll('#menu');
let btntrue = true;

button.addEventListener('click', function () {

  menu.forEach(menuitem =>{
    if(btntrue){
      menuitem.style.display = 'block'; 
    }else{
      menuitem.style.display = 'none';
    }
  });
  btntrue = !btntrue;
});

document.getElementById("myDropdown").addEventListener("click", function() {
  // Remove the disabled attribute from the first option when the dropdown is clicked
  this.options[0].removeAttribute("disabled");
});
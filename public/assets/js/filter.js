var click = document.querySelector('.Click-Category');
var category = document.querySelector('.category-bar');
let status = true;
click.addEventListener('click', function () {
    if (status) {
        category.classList.add('category-bar-block');
    } else {
        category.classList.remove('category-bar-block');
    }
    status = !status;
});
function showImg(fileName) {
    let Img = document.querySelector('#img');
    Img.setAttribute('src', fileName);
}
function hiddenQuantity() {
    var hiddenQuantity = document.querySelectorAll('.hiddenQuantity');
    var Quantity = document.querySelector('.quantityText');
    hiddenQuantity.value = Quantity.value;
    alert(hiddenQuantity.value);
}

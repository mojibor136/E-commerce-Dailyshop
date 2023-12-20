
// Get references to all the buttons and dropdown contents
var dropdownButtons = document.querySelectorAll(".dropdownButton");
var dropdownContents = document.querySelectorAll(".dropdownContent");
var menubtn = document.querySelector('.name');
var menu = document.querySelector('.menu');
var arr = document.querySelector('.arr');
var one = true;

// Add a click event listener to each button
dropdownButtons.forEach(function (button, index) {
    var nav_arr = button.querySelector('.nav-arr');

    button.addEventListener("click", function () {
        this.style.background = "#2ea7ff";
        this.style.color = "#fff";

        var computedStyle = window.getComputedStyle(dropdownContents[index]);
        if (computedStyle.display === "none" || computedStyle.display === "") {
            dropdownContents[index].style.display = "block";
            nav_arr.style.transform = "rotate(-135deg)";
        } else {
            dropdownContents[index].style.display = "none";
            nav_arr.style.transform = "rotate(-45deg)";
        }
    });
});

menubtn.addEventListener('click', function () {
    if (one) {
        menu.style.display = 'block';
        arr.style.transform = "rotate(-45deg)";
        arr.style.marginTop = "5px";
    }
    else {
        menu.style.display = 'none';
        arr.style.transform = "rotate(135deg)";
        arr.style.marginTop = "0px";
    };
    one = !one;
});
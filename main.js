AOS.init({
    offset: 120, 
});

function myFunction() {
/* Get the text field */
var copyText = document.getElementById("copy_add");

/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /* For mobile devices */

/* Copy the text inside the text field */
document.execCommand("copy");

/* Alert the copied text */
alert("Copied the text: " + copyText.value);
}

var btn_copy = document.getElementById("btn_copy");
btn_copy.addEventListener("click",myFunction)

anime({
    targets: '#btn_buy',
    scale: 1.05,
    loop: true,
    easing: 'easeInOutSine'
});

// This will work! 
new TypeIt("#title", {
        speed: 50,
        })
        .pause(500)
        .go();


    new TypeIt("#section2-title", {
        strings: '"What is Doge Monkey?"',
        speed: 100,
        loop: true,
      }).go();
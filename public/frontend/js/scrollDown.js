// When the user scrolls down 20px from the top of the document, show the button
document.getElementById("scrollDown").style.display = "block";
window.onscroll = function() {scrollDownFunction()};

function scrollDownFunction() {
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        document.getElementById("scrollBtn").style.display = "block";
        document.getElementById("scrollDown").style.display = "none";
    }else {
        document.getElementById("scrollBtn").style.display = "none";
        document.getElementById("scrollDown").style.display = "block";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function bottomFunction() {
    window.scrollTo(0, document.body.scrollHeight);
    window.scrollTo(0, document.documentElement.scrollHeight);
}
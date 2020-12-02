// go to top div
const myScrollFunc = function () {

    myID = document.getElementById("myID");

    const y = window.scrollY;
    if (y >= 400) {
        myID.className = "bottomMenu show"
    } else {
        myID.className = "bottomMenu hide"
    }
};

window.addEventListener("scroll", myScrollFunc);

// if button myId is clicked move to top of the page
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

alert('test');
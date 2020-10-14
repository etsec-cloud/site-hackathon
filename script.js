var el = document.getElementById("section1");
console.log(el.offsetHeight);

window.onscroll = function() {
  myFunction();
};

function myFunction() {
  if (
    document.body.scrollTop > el.offsetHeight ||
    document.documentElement.scrollTop > el.offsetHeight
  ) {
    document.getElementById("navbar").classList.add("bgColorBlack");
  } else if (
    document.body.scrollTop < el.offsetHeight ||
    document.documentElement.scrollTop < el.offsetHeight
  ) {
    document.getElementById("navbar").classList.remove("bgColorBlack");
  }
}

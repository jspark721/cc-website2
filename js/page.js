let aboutText = document.getElementById("about-text");

window.onscroll = function() {
  aboutText.style.transform = 'translateY(130px)';
  if(window.scrollY < 5) {
    aboutText.style.transform = 'translateY(0)';
  }
}

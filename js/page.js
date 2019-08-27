let aboutText = document.getElementById("about-text");
let clientText = document.getElementById("client-text");

window.onscroll = function() {
  aboutText.style.transform = 'translateY(130px)';
  if(window.scrollY < 5) {
    aboutText.style.transform = 'translateY(0)';
  }
}
window.onscroll = function() {
  clientText.style.transform = 'translateY(90px)';
  if(window.scrollY < 5) {
    clientText.style.transform = 'translateY(0)';
  }
}

//homepage video button
let workVid = document.getElementById("hero-work-video");
let btn = document.getElementById("video-btn");

// pause and play the video
function playPause() {
  if (workVid.paused) {
    workVid.play();
    btn.innerHTML = "pause <i class='fas fa-pause'></i>";
  } else {
    workVid.pause();
    btn.innerHTML = "play <i class='fas fa-play'></i>";
  }
}

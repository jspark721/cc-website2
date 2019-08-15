//homepage video button
let video = document.getElementById("hero-video");
let btn = document.getElementById("video-btn");

// pause and play the video
function playPause() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "pause <i class='fas fa-pause'></i>";
  } else {
    video.pause();
    btn.innerHTML = "play <i class='fas fa-play'></i>";
  }
}

//landing page animation

let homepageLogo = document.getElementById('logo-main');

document.addEventListener("DOMContentLoaded", function(e) {
  document.getElementById('page-load').classList.add('fade');
});

setTimeout(function() {
  homepageLogo.style.opacity = '1';
  homepageLogo.style.transform = 'translateY(-20px)';
}, 700);
setTimeout(function() {
  document.getElementById('page-load').style.zIndex = '-10';
}, 1700);

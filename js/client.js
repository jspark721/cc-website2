let iphoneBtn = document.getElementById("pauseBtn");
let iphoneVid = document.getElementById("iphone-video");
// pause and play the video
function pauseIphone() {
  if (iphoneVid.paused) {
    iphoneVid.play();
    iphoneBtn.innerHTML = "<i class='fas fa-pause'></i>";
  } else {
    iphoneVid.pause();
    iphoneBtn.innerHTML = "<i class='fas fa-play'></i>";
  }
}

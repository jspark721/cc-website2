//homepage video button
let video = document.getElementById("hero-video");
let btn = document.getElementById("video-btn");

// pause and play the video
function playPause() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "pause";
  } else {
    video.pause();
    btn.innerHTML = "play";
  }
}

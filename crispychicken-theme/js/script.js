//menu navbar function
let body = document.getElementsByTagName("BODY")[0];
let openNav = document.getElementById("nav--main");
let menuIcon = document.getElementById("menu--box");
let closeIcon = document.getElementById("menu--close");

function openMenu() {
  openNav.style.transform = 'translateY(0)';
  openNav.style.opacity = '1';
  body.style.overflow = 'hidden';
  menuIcon.style.transform = 'translateY(-100px)';
  closeIcon.style.transform = 'translateY(0)';
}

function closeMenu() {
  openNav.style.transform = 'translateY(-100vh)';
  openNav.style.transition = 'all .5s ease-out';
  openNav.style.opacity = '0'
  body.style.overflow = 'visible';
  menuIcon.style.transform = 'translateY(0)';
  closeIcon.style.transform = 'translateY(-100px)';
}

//homepage video button
let video = document.getElementById("hero-video");
let vidBtn = document.getElementById("video-btn");

// pause and play the video
function playPause() {
  if (video.paused) {
    video.play();
    vidBtn.innerHTML = "pause <i class='fas fa-pause'></i>";
  } else {
    video.pause();
    vidBtn.innerHTML = "play <i class='fas fa-play'></i>";
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

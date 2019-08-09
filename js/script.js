let homepageLogo = document.getElementById('logo-main');
let subtitle = document.getElementById('hero-subtitle');
let line = document.getElementById('hero--line');

function showLogo() {
  homepageLogo.style.opacity = '1';
  homepageLogo.style.transform = 'translateY(-20px)';
}

function showSubtitle() {
  subtitle.style.opacity = '1';
  subtitle.style.transform = 'translateX(0)';
}

function showLine() {
  line.style.opacity = '1';
}

setTimeout(showLogo(), 7000);
setTimeout(showSubtitle(), 22000);
setTimeout(showLine(), 90000);


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

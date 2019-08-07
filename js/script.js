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


window.onscroll = function() {
    let heroSection = document.getElementById('hero');
    if ( window.pageYOffset > 300 ) {
        line.classList.add("fixed");
    } else {
      return console.log('nothing happened');
    }
}

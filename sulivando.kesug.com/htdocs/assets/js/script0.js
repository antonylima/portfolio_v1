let popup = document.getElementById('popup');
let center = document.getElementById('center');
let closemenu = document.getElementById('close-menu');
let btmenu = document.getElementById('bt-menu');
let menu = document.getElementById('menu');
let links = document.getElementsByTagName('a');
let about = document.getElementById('about');
let aboutbt = document.getElementsByClassName('aboutbt');
let proj = document.getElementById('proj');
let projbt = document.getElementsByClassName('projbt');
let home = document.getElementById('home');
let logo = document.getElementById('logo');
let resumebt = document.getElementsByClassName('resumebt');
let rsm = document.getElementById('rsm');
let divmenu = document.getElementById('divmenu');
let pt = document.getElementById('pt');
let en = document.getElementById('en');
let bvpt = document.getElementById('bvpt');
let bven = document.getElementById('bven');

function openmn() {
  menu.style.display = 'block';
  btmenu.style.visibility = 'hidden';
}

function closemn() {
  menu.style.display = 'none';
  btmenu.style.visibility = 'visible';
}

function openpp() {
  popup.style.animation = 'animopen 200ms';
  popup.style.display = 'block';
  menu.style.display = 'none';
  btmenu.style.visibility = 'visible';
}

function closepp() {
  popup.style.display = 'none';
}

for (link in links) {
  if (link > 0) {
    links[link].setAttribute('target', '_blank');
  }
}

aboutbt[0].addEventListener('click', () => {
  home.style.display = 'none';
  proj.style.display = 'none';
  rsm.style.display = 'none';
  about.style.display = 'block';
});
aboutbt[1].addEventListener('click', () => {
  home.style.display = 'none';
  proj.style.display = 'none';
  rsm.style.display = 'none';
  about.style.display = 'block';
  divmenu.style.top = '-10px';
});
projbt[0].addEventListener('click', () => {
  home.style.display = 'none';
  about.style.display = 'none';
  rsm.style.display = 'none';
  proj.style.display = 'block';
});
projbt[1].addEventListener('click', () => {
  home.style.display = 'none';
  about.style.display = 'none';
  rsm.style.display = 'none';
  proj.style.display = 'block';
  divmenu.style.top = '-10px';
});

logo.addEventListener('click', () => {
  about.style.display = 'none';
  proj.style.display = 'none';
  rsm.style.display = 'none';
  home.style.display = 'block';
  divmenu.style.top = '-10px';
});

resumebt[0].addEventListener('click', () => {
  home.style.display = 'none';
  about.style.display = 'none';
  proj.style.display = 'none';
  rsm.style.display = 'block';
});

resumebt[1].addEventListener('click', () => {
  home.style.display = 'none';
  about.style.display = 'none';
  proj.style.display = 'none';
  rsm.style.display = 'block';
  divmenu.style.top = '9px';
});

//if(!rsm.style.display === 'none'){
//divmenu.style.top = '9px';
//}

let pten = 1;
function changelang(){
if(pten === 1){
pt.style.display = "none";
en.style.display = "block";
bvpt.style.display = "none";
bven.style.display = "block";
pten = 2;
}
else{
pt.style.display = "block";
en.style.display = "none";
bvpt.style.display = "block";
bven.style.display = "none";
pten = 1;
}
}
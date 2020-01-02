
let createfolder= document.getElementById('createfolder');
let folder=document.getElementById('folder');
let newfolder=document.getElementById('newfolder');
let retourfolder=document.getElementById('retourfolder');

let traitement= document.getElementById('traitement');
let newtraitement=document.getElementById('newtraitement');
let fermetraitement=document.getElementById('fermetraitement');

let traitementplus= document.getElementById('traitementplus');
let formtraitement=document.getElementById('formtraitement');

newtraitement.addEventListener('click', function(){
  traitement.classList.remove('fermerv');
  traitement.classList.add('afficherv');

  newtraitement.classList.remove('afficherv');
  newtraitement.classList.add('fermerv');
});
fermetraitement.addEventListener('click', function(){
  traitement.classList.remove('afficherv');
  traitement.classList.add('fermerv');

  newtraitement.classList.remove('fermerv');
  newtraitement.classList.add('afficherv');
  
});

createfolder.addEventListener('click', function(){
  folder.classList.remove('afficherv');
  folder.classList.add('fermerv');
  newfolder.classList.remove('fermerv');
  newfolder.classList.add('afficherv');
});

retourfolder.addEventListener('click', function(){
  newfolder.classList.remove('afficherv');
  newfolder.classList.add('fermerv');
  folder.classList.remove('fermerv');
  folder.classList.add('afficherv');
});
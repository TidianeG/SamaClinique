
let createfolder= document.getElementById('createfolder');
let createanalyse=document.getElementById('createanalyse');
let createtraitement=document.getElementById('createtraitement');

let retourfolder= document.getElementById('retourfolder');
let retouranalyse=document.getElementById('retouranalyse');
let retourtraitement=document.getElementById('retourtraitement');


let traitementplus= document.getElementById('traitementplus');
///Affichage pour la creation de nouveau folder
createfolder.addEventListener('click', function(){

  let folder=document.getElementById('folder');
  let newfolder=document.getElementById('newfolder');
  let newtraitement=document.getElementById('newtraitement');
  let newanalyse=document.getElementById('newanalyse');

  newfolder.classList.remove('fermerv');
  newfolder.classList.add('afficherv');

  folder.classList.remove('afficherv');
  folder.classList.add('fermerv');

  newtraitement.classList.remove('afficherv');
  newtraitement.classList.add('fermerv');

  newanalyse.classList.remove('afficherv');
  newanalyse.classList.add('fermerv');

  createanalyse.classList.remove('afficherv');
  createanalyse.classList.add('fermerv');

  createfolder.classList.remove('afficherv');
  createfolder.classList.add('fermerv');

  createtraitement.classList.remove('afficherv');
  createtraitement.classList.add('fermerv');
});

///Affichage pour la creation de nouvelle analyse
createanalyse.addEventListener('click', function(){

  let folder=document.getElementById('folder');
  let newfolder=document.getElementById('newfolder');
  let newtraitement=document.getElementById('newtraitement');
  let newanalyse=document.getElementById('newanalyse');
  let ajoutnew=document.getElementById('ajoutnew');

  newanalyse.classList.remove('fermerv');
  newanalyse.classList.add('afficherv');

  folder.classList.remove('afficherv');
  folder.classList.add('fermerv');

  newtraitement.classList.remove('afficherv');
  newtraitement.classList.add('fermerv');

  newfolder.classList.remove('afficherv');
  newfolder.classList.add('fermerv');

  createanalyse.classList.remove('afficherv');
  createanalyse.classList.add('fermerv');

  createfolder.classList.remove('afficherv');
  createfolder.classList.add('fermerv');

  createtraitement.classList.remove('afficherv');
  createtraitement.classList.add('fermerv');
 
});

///Affichage pour la creation de nouveau folder
createtraitement.addEventListener('click', function(){

  let folder=document.getElementById('folder');
  let newfolder=document.getElementById('newfolder');
  let newtraitement=document.getElementById('newtraitement');
  let newanalyse=document.getElementById('newanalyse');
  let order=document.getElementById('order');
  let treatment=document.getElementById('treatmet');


  folder.classList.remove('afficherv');
  folder.classList.add('fermerv');

  newfolder.classList.remove('afficherv');
  newfolder.classList.add('fermerv');

  newanalyse.classList.remove('afficherv');
  newanalyse.classList.add('fermerv');

  newtraitement.classList.remove('fermerv');
  newtraitement.classList.add('afficherv');

  treatment.classList.remove('fermerv');
  treatment.classList.add('afficherv');

  createanalyse.classList.remove('afficherv');
  createanalyse.classList.add('fermerv');

  createfolder.classList.remove('afficherv');
  createfolder.classList.add('fermerv');

  createtraitement.classList.remove('afficherv');
  createtraitement.classList.add('fermerv');
});


retourtraitement.addEventListener('click', function(){
  let folder=document.getElementById('folder');
  let newtraitement=document.getElementById('newtraitement');
  newtraitement.classList.remove('afficherv');
  newtraitement.classList.add('fermerv');

  folder.classList.remove('fermerv');
  folder.classList.add('afficherv');
  
});

retouranalyse.addEventListener('click', function(){
  let folder=document.getElementById('folder');
  let newanalyse=document.getElementById('newanalyse');
  newtraitement.classList.remove('afficherv');
  newtraitement.classList.add('fermerv');

  folder.classList.remove('fermerv');
  folder.classList.add('afficherv');
  
});


retourfolder.addEventListener('click', function(){
  let newfolder=document.getElementById('newfolder');
  let folder=document.getElementById('folder');
  newfolder.classList.remove('afficherv');
  newfolder.classList.add('fermerv');
  folder.classList.remove('fermerv');
  folder.classList.add('afficherv');
});
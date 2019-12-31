let rv= document.getElementById('rv');
let newrv=document.getElementById('newrv');
let fermerv=document.getElementById('fermerv');
let inforv=document.getElementById('inforv');
let newcons=document.getElementById('newcons');
let fermecons=document.getElementById('fermecons');
let consult=document.getElementById('consult');

let listecons=document.getElementById('listecons');
let listerv=document.getElementById('listerv');
let myTable1=document.getElementById('myTable1');
let myTable2=document.getElementById('myTable2');
listecons.addEventListener('click', function(){
  myTable1.classList.remove('afficherv');
  myTable1.classList.add('fermerv');
  listecons.classList.remove('afficherv');
  listecons.classList.add('fermerv');

  listerv.classList.remove('fermerv');
  listerv.classList.add('afficherv');
  myTable2.classList.remove('fermerv');
  myTable2.classList.add('afficherv');
  document.getElementById('titre').innerHTML="<h3>Liste de tous les consultations</h3>";

});
listerv.addEventListener('click', function(){
  myTable2.classList.remove('afficherv');
  myTable2.classList.add('fermerv');
  listerv.classList.remove('afficherv');
  listerv.classList.add('fermerv');

  listecons.classList.remove('fermerv');
  listecons.classList.add('afficherv');
  myTable1.classList.remove('fermerv');
  myTable1.classList.add('afficherv');
  document.getElementById('titre').innerHTML="<h3>Liste de tous les rendez-vous</h3>";
});

newrv.addEventListener('click', function(){
  inforv.classList.remove('afficherv');
  consult.classList.remove('afficherv');
  consult.classList.add('fermerv');
  inforv.classList.add('fermerv');
  rv.classList.remove('fermerv');
  rv.classList.add('afficherv');
});

newcons.addEventListener('click', function(){
  inforv.classList.remove('afficherv');
  inforv.classList.add('fermerv');
  rv.classList.remove('afficherv');
  rv.classList.add('fermerv');
  consult.classList.remove('fermerv');
  consult.classList.add('afficherv');
});

fermecons.addEventListener('click', function(){
  inforv.classList.remove('fermerv');
  inforv.classList.add('afficherv');
  rv.classList.remove('afficherv');
  rv.classList.add('fermerv');
  consult.classList.remove('afficherv');
  consult.classList.add('fermerv');
});

fermerv.addEventListener('click', function(){
  inforv.classList.remove('fermerv');
  inforv.classList.add('afficherv');
  rv.classList.remove('afficherv');
  rv.classList.add('fermerv');
  consult.classList.remove('afficherv');
  consult.classList.add('fermerv');
});
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("to-top").style.display = "block";
  } else {
    document.getElementById("to-top").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


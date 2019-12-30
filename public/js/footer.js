let rv= document.getElementById('rv');
let newrv=document.getElementById('newrv');
let fermerv=document.getElementById('fermerv');
let inforv=document.getElementById('inforv');

newrv.addEventListener('click', function(){
  rv.classList.remove('fermerv');
  inforv.classList.remove('afficherv');
  inforv.classList.add('fermerv');
  rv.classList.add('afficherv');
});

fermerv.addEventListener('click', function(){
  rv.classList.remove('afficherv');
  rv.classList.add('fermerv');
  inforv.classList.remove('fermerv');
  inforv.classList.add('afficherv');
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


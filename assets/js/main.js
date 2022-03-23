function voirMdp() {
  var mdp = document.getElementById('password');  
  var type = mdp.getAttribute('type') == 'password' ?'text' :'password'; // écriture ternaire (sorte de IF/ELSE)
  mdp.setAttribute('type', type) ;
}
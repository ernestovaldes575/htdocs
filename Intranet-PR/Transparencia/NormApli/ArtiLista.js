//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = '/Intranet/menuintranet.php';
      }
else if (event.target.classList.contains('ArtiTrab')) {
        ArtiTrab = event.target.getAttribute('data-Arti');
        window.location.href = 'FracLista.php?ParCon01='+ArtiTrab;
      } 
});

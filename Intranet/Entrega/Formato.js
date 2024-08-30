//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = '/Intranet/menuintranet.php';
      }
else if (event.target.classList.contains('Entrega')) {
        ConsBusq = event.target.getAttribute('data-Cons');
        window.location.href = 'Inciso.php?ParBus01='+ConsBusq
      } 
});

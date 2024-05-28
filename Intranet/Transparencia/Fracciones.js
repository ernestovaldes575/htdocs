//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = '/Intranet/menuintranet.php';
      }
else if (event.target.classList.contains('NumeTrim')) {
        ConsBusq = event.target.getAttribute('data-Cons');
	    TrimBusq = event.target.getAttribute('data-Trim');
        window.location.href = 'Inciso.php?PaAMB01='+ConsBusq+'&PaAMB02='+TrimBusq;
      } 
});

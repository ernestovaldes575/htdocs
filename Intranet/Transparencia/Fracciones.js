//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = '/Intranet/menuintranet.php';
      }
else if (event.target.classList.contains('PaSi')) {
        CampBusq = event.target.getAttribute('data-CaBu');					
        window.location.href = 'Inciso.php?PaAMB01='+CampBusq;
      } 
});

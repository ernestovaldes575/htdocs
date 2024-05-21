//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Nuev')) {
		//Cambiar nombre 
        window.location.href = 'EstaClasi.php?PaAMB01=A&PaAMB02=0';
      }
else if (event.target.classList.contains('Modi')) {
        CampBusq = event.target.getAttribute('data-CaBu');					
        //Cambiar nombre
		window.location.href = 'EstaPagi.php?PaAMB01=M&PaAMB02='+CampBusq;
      } 
else if (event.target.classList.contains('Elim'))
	  if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
      { CampBusq = event.target.getAttribute('data-CaBu');					
        //Cambiar nombre
	     window.location.href = 'EstaPagi.php?PaAMB01=B&PaAMB02='+CampBusq;
	  } 
       
});

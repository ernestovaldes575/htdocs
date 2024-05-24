//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Nuev')) {
		//Cambiar nombre archivo 
        window.location.href = 'Clasif.php?PaAMB01=A&PaAMB02=0';
      }
else if (event.target.classList.contains('Modi')) {
        ClaEsPa = event.target.getAttribute('data-id');			
	
	    //Cambiar nombre archivo
        window.location.href = 'Clasif.php?PaAMB01=M&PaAMB02='+ClaEsPa;
      } 
else if (event.target.classList.contains('Elim')) {
        ClaEsPa = event.target.getAttribute('data-id');					
        //Cambiar nombre archivo
	    window.location.href = 'Clasif.php?PaAMB01=B&PaAMB02='+ClaEsPa;
    }    
});

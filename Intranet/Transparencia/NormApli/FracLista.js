//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = 'ArtiLista.php';
      }
else if (event.target.classList.contains('NumeTrim')) {
        NumeInci = event.target.getAttribute('data-Inciso');
	    SubIncis = event.target.getAttribute('data-SubInc');
	    DescNorm = event.target.getAttribute('data-Normat');
	
        window.location.href = 'FracListaConf.php?ParCon01='+NumeInci+
												'&ParCon02='+SubIncis+
												'&ParCon03='+DescNorm;;
      } 
});

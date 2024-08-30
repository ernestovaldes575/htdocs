//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = 'ArtiLista.php';
      }
else if (event.target.classList.contains('NumeTrim')) {
        ClavForm = event.target.getAttribute('data-ClFo');
	    DescForm = event.target.getAttribute('data-DeFo');
	
        window.location.href = 'FormatoListaConf.php?ParCon01='+ClavForm+
												'&ParCon02='+DescForm;
      } 
});

//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
  if (event.target.classList.contains('Deta')) {
	  ConsEmpr = event.target.getAttribute('data-id');
      window.location.href = 'EmpresaInic.php?Param1='+ConsEmpr;
    }    
});

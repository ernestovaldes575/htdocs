//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Regr')) {
        window.location.href = 'FormatoLista.php';
      }
else if (event.target.classList.contains('AltaArea')) {
        ConsUnid = event.target.getAttribute('data-ConsUnid');
        window.location.href = 'FormAreaList.php?Param2='+ConsUnid;
      } 
else if (event.target.classList.contains('ElimArea'))
	  if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
      { ConsUnid = event.target.getAttribute('data-ConsUnid');
        window.location.href = 'FormAreaList.php?Param1='+ConsUnid;
	  } 
	
});

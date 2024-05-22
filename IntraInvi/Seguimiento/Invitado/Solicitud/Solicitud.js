//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
  if (event.target.classList.contains('Nuev')) {
        // Redirigir a la página de modificación
        window.location.href = 'RepartidorList.php';
    }
  else if (event.target.classList.contains('Modi')) {
     // Botón de Modificar presionado
     const id = event.target.getAttribute('data-id');
     const EstSeg = event.target.getAttribute('data-edo');
     // Redirigir a la página de modificación con el ID
     window.location.href = 'Solicitud.php?PaAMB01=M&PaAMB02='+ id+"&PaAMB03="+EstSeg;
    } 
 else if (event.target.classList.contains('Elim')) {
    // Botón de Modificar presionado
    const id = event.target.getAttribute('data-id');
    const EstSeg = event.target.getAttribute('data-edo');
    // Redirigir a la página de modificación con el ID
    if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
      { window.location.href = 'Solicitud.php?PaAMB01=B&PaAMB02=' +id+ "&PaAMB03="+EstSeg; }
 }    
});

//-------------------------------------------------------------------------
function CargEjer(Param1)
{ location.href = "SolicitudList.php?Param1="+Param1; }


function CargEsta(Param2)
{ location.href = "SolicitudList.php?Param2="+Param2; }

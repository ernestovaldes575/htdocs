//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
  if (event.target.classList.contains('Nuev')) {
        // Redirigir a la página de modificación
        window.location.href = 'PWRegistro01.php?PaAMB01=A&PaAMB02=0';
    }
  else if (event.target.classList.contains('Modi')) {
     // Botón de Modificar presionado
     const id = event.target.getAttribute('data-id');
     // Redirigir a la página de modificación con el ID
     window.location.href = 'PWRegistro01.php?PaAMB01=M&PaAMB02=' + id;
    } 
 else if (event.target.classList.contains('Elim')) {
    // Botón de Modificar presionado
    const id = event.target.getAttribute('data-id');
    // Redirigir a la página de modificación con el ID
    if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
      { window.location.href = 'PWRegistro01.php?PaAMB01=B&PaAMB02=' + id; }
 }    
});

//-------------------------------------------------------------------------
function CargEjer(Param)
{ location.href = "PWRegistroList01.php?Param1="+Param; }


function CargEsta(Param)
{ location.href = "PWRegistroList01.php?Param2="+Param; }

function CargImag(Param1,Param2,Param3,Param4)
{ Ruta = "ImgPagSubiArch.php?Param1="+Param1+
							"&Param2="+Param2+
							"&Param3="+Param3+
							"&Param4="+Param4; 
  Dime = "width=450 height=350 top=10 left=10 scrollbars";
  Cata = window.open(Ruta,"Carga documento",Dime);
}

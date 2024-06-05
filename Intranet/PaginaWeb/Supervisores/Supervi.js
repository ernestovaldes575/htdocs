//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
if (event.target.classList.contains('Regr')) {
		window.location.href = 'SuperviList.php';
       }   
});

//Carga Imagen
function CargImag(Param1)
{ Ruta = "SuperviSubiArch.php?Param1="+Param1; 
    Dime = "width=450 height=350 top=10 left=10 scrollbars";
    Cata = window.open(Ruta,"Carga documento",Dime);
}

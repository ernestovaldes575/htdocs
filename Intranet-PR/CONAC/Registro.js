//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function(event){ 
    if(event.target.classList.contains('Modi')) {
        // Botón de Modificar presionado
        const ParBus01 = event.target.getAttribute('ParBus01');
        // Redirigir a la página de modificación con el ID
        window.location.href = 'ConacSubcList.php?ParBus01=' + ParBus01;
    }     
});

//-------------------------------------------------------------------------
function CargEjer(Param){ location.href = "ConacClasList.php?Param1="+Param; }
function CargImag(Param1,Param2,Param3,Param4)
{ Ruta = "ImgPagSubiArch.php?Param1="+Param1+
							"&Param2="+Param2+
							"&Param3="+Param3+
							"&Param4="+Param4; 
    Dime = "width=450 height=350 top=10 left=10 scrollbars";
    Cata = window.open(Ruta,"Carga documento",Dime);
}
//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener('click', 
function (event) { 
	 if (event.target.classList.contains('Nuev')) {
        window.location.href = 'EstaPagi.php?PaAMB01=A&PaAMB02=0';
      }
else if (event.target.classList.contains('Modi')) {
        ClaEsPa = event.target.getAttribute('data-id');					
        window.location.href = 'EstaPagi.php?PaAMB01=M&PaAMB02='+ClaEsPa;
      } 
else if (event.target.classList.contains('Elim')) {
        ClaEsPa = event.target.getAttribute('data-id');					
        window.location.href = 'EstaPagi.php?PaAMB01=B&PaAMB02='+ClaEsPa;
    }    
});

//-------------------------------------------------------------------------
function CarImgPa(Param1,Param2,Param3,Param4)
{ 
  Ruta = "URLSubiArch.php?Param1="+Param1+
						 "&Param2="+Param2+
						 "&Param3="+Param3+
						 "&Param4="+Param4; 
  Dime = "width=450 height=350 top=10 left=10 scrollbars";
  Cata = window.open(Ruta,"Carga documento",Dime);
}


//-------------------------------------------------------------------------

//Funcion de alta 
document.addEventListener("click", 
function (event) { 
//------------------------------------------------------------------
//Registra uno  
	 if (event.target.classList.contains("NuevUno")) {
        window.location.href = "InfoUno.php?PaAMB01=A&PaAMB02=0";
      }
else if (event.target.classList.contains("NuevList")) { 
        window.location.href = "InfoAltList.php";
       }
else if (event.target.classList.contains("ModiUno")) {
        CampBusq = event.target.getAttribute("data-CaBu");
        window.location.href = "InfoUno.php?PaAMB01=M&PaAMB02="+CampBusq;
      } 
else if (event.target.classList.contains("ModiList")) {
        CampBusq = event.target.getAttribute("data-CaBu");
        window.location.href = "InfoModList.php?PaAMB01="+CampBusq;
      } 
else if (event.target.classList.contains("ElimUno"))
	  if (confirm("¿Estás seguro de que deseas eliminar el registro?")) 
      { CampBusq = event.target.getAttribute("data-CaBu");
        window.location.href = "InfoUno.php?PaAMB01=B&PaAMB02="+CampBusq;
	  } 

});



//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
       if (event.target.classList.contains('Repa')) {
           window.location.href = 'RepartidorList.php';
        }
  else if (event.target.classList.contains('Modi')) {
         ConsSoli = event.target.getAttribute('data-CaBu');
     	 window.location.href = 'Solicitud.php?PaCRUD01=M&PaCRUD02='+ConsSoli;
        } 
 else if (event.target.classList.contains('Elim')) {
        if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
         { ConsSoli = event.target.getAttribute('data-CaBu');
		   window.location.href = 'Solicitud.php?PaCRUD01=B&PaCRUD02='+ConsSoli; 
		 }
 	   }    
});

//-------------------------------------------------------------------------
function CargEjer(Param1)
{ location.href = "SolicitudList.php?Param1="+Param1; }


function CargMes(Param2)
{ location.href = "SolicitudList.php?Param2="+Param2; }

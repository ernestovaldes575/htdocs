//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
       if (event.target.classList.contains('Nuevo')) {
           window.location.href = 'Cliente.php?PaCRUD01=M&PaCRUD02=0';
        }
  else if (event.target.classList.contains('Modi')) {
         ConsSoli = event.target.getAttribute('data-CaBu');
     	 window.location.href = 'Cliente.php?PaCRUD01=M&PaCRUD02='+ConsSoli;
        } 
 else if (event.target.classList.contains('Elim')) {
        if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
         { ConsSoli = event.target.getAttribute('data-CaBu');
		   window.location.href = 'Cliente.php?PaCRUD01=B&PaCRUD02='+ConsSoli; 
		 }
 	   }    
});

//-------------------------------------------------------------------------
function CargBrok(Param2)
{ location.href = "ClientesList.php?Param2="+Param2; }

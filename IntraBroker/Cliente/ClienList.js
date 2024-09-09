//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
       if (event.target.classList.contains('Nuev')) {
           window.location.href = 'Cliente.php?PaCRUD01=M&PaCRUD02=0';
        }
  else if (event.target.classList.contains('Modi')) {
         ConsClie = event.target.getAttribute('data-CaBu');
     	 window.location.href = 'Cliente.php?PaCRUD01=M&PaCRUD02='+ConsClie;
        } 
 else if (event.target.classList.contains('Elim')) {
        if (confirm('¿Estás seguro de que deseas eliminar el registro?')) 
         { ConsClie = event.target.getAttribute('data-CaBu');
		window.location.href = 'Cliente.php?PaCRUD01=B&PaCRUD02='+ConsClie; 
		 }
 	   }    
});

//-------------------------------------------------------------------------
function CargBrok(Param1)
{ location.href = "ClienList.php?Param1="+Param1; }


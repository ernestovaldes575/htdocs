//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
  if (event.target.classList.contains('Empr')) {
      ConsRepa = event.target.getAttribute('data-CoRe');
      window.location.href = 'Solicitud.php?PaCRUD01=A&PaCRUD02=0'+
	  									  '&PaCRUD03=' +ConsRepa;
    }
});

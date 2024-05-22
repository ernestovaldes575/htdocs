//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
  if (event.target.classList.contains('Empr')) {
      CampBusq = event.target.getAttribute('data-CaBu');
      window.location.href = 'Solicitud.php?PaCRUD01=A&PaCRUD02=0&PaCRUD03='+CampBusq;
    }
});

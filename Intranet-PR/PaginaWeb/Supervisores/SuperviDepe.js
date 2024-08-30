//-------------------------------------------------------------------------
//Funcion de alta 
document.addEventListener('click', 
function (event) { 
     if (event.target.classList.contains('Modi')) {
       ConsUnid = event.target.getAttribute('data-CoUn');    
       window.location.href = 'SuperviDepeInc.php?Param1='+ConsUnid;
      }
else if (event.target.classList.contains('Regr')) {
       window.location.href = '/Intranet/menuintranet.php'; 
      }   
});

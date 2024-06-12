//-------------------------------------------------------------------------
function CarImgPa(Param1)
{ 
  Ruta = "DocuSubiArch.php?Param1="+Param1; 
  Dime = "width=450 height=350 top=10 left=10 scrollbars";
  Cata = window.open(Ruta,"Carga documento",Dime);
}
<!--#include virtual="/Encabezado/Encabezado.asp" -->
<!--#include virtual="/Connections/ConeAdmin.asp" -->
<!--#include virtual="/Encabezado/htmlEncabeza.asp" -->
<%
//Este archivo tambien esta Contratcion

//Encabezado
AEncaMae = new Array();
AEncaMae = String(Request.Cookies("CEncaMae")).split("|")
EjerTrab = AEncaMae[0]
ConsServ = AEncaMae[1]
TipoMovi = AEncaMae[2]
PosiList = AEncaMae[3]

AQuinTra = new Array();
AQuinTra = String(Request.Cookies("CQuinTra")).split("|")
//Informacion de la tabla NCQuincena
QuinTrab = AQuinTra[0]
MesTrab  = AQuinTra[1]  
EsNoTrab = AQuinTra[2]

//Informacion para la Qn
EjerCamb = AQuinTra[3]  
QuinCamb = AQuinTra[4] 
PriSegCa = AQuinTra[5] 
MesCamb  = AQuinTra[6] 
EsNoCamb = AQuinTra[7] 

//Informacion de la Qn Propuesta del sistema para trabajar 
QuiProSi = AQuinTra[8]
 										 							   
%>
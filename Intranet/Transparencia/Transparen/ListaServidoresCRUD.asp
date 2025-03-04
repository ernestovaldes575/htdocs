<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<!--#include file="EncaSePuCa.asp" -->
<%  
ABusqMae = new Array();
ABusqMae =  String(Request.Cookies("CBusqMae")).split("|")
//Response.Write(ABusqMae)
BuscUnid = ABusqMae[0] 
EstaServ = ABusqMae[1] 
RangList = ABusqMae[2]
OrdeList = ABusqMae[3]
BuscTiNo = ABusqMae[4]

BandQuer = true 
Condicio = ""
if (String(BuscUnid) != 'T' )			 //Todas las unidades
	Condicio +=" AND sunidad = "+BuscUnid+" "

if (String(EstaServ) != 'T' )			 //Todas las unidades
	Condicio +=" AND SStatus='"+EstaServ+"'  " 

//Tipo de nomina
NomiT = ""; Nomi0 = ""; Nomi1 = "";Nomi2 = "";
Nomi3 = ""; Nomi4 = ""; Nomi5 = "";Nomi6 = "";Nomi7 = "";

if ( String (BuscTiNo) != "T" )
  Condicio +=" AND STipoNomina = "+BuscTiNo+" "
	  	
	 
OrdeCamp = ""
switch( String(OrdeList))  	   
  { case "0": OrdeCamp= "STipoNomina, RTrim(LTrim(SApellidoPaterno))+' '+RTrim(LTrim(SApellidoMaterno))+"+
	  					  "' '+RTrim(LTrim(SNombre))"; break; 
	case "1": OrdeCamp= "SNumeroEmpleado DESC "; break; 
	case "2": OrdeCamp= "SNumeroEmpleadoAnt"; break; 
	case "3": OrdeCamp= "RTrim(LTrim(SApellidoPaterno))+' '+RTrim(LTrim(SApellidoMaterno))+"+
	  					  "' '+RTrim(LTrim(SNombre))"; break; 
	case "4": OrdeCamp= "cundescripcion"; break; 
  }
  
//*****************************************************************************************************************************
//Datos del Servidor Publico 
EjecInst  = "SELECT sconsecut, SNumeroEmpleado, SNumeroEmpleadoAnt,sestado,STipoNomina, SStatus,"+
					   "RTrim(LTrim(SApellidoPaterno))+' '+RTrim(LTrim(SApellidoMaterno))+' '+RTrim(LTrim(SNombre)) as nombre, "+
					   "cundescripcion, "+
					   "TEdificio, CEDDescri, TTipoInte, CTIDescri, TPuesto, CPUDescri, "+
					   "TCargo, FAltaCargo, TTelefoOfic, TExtencion, TNota "+
				"FROM   Atserpub "+
				"INNER JOIN  Admin2024..NCCategorias ON SAyuntamiento = CCAAyuntamiento AND "+
													   "SCategoria = CCAClave AND "+
													   "CCAEjercicio = year(GetDate()) "+
				"INNER JOIN  Acceso.dbo.ACUnidades ON   SAyuntamiento = CUNAyuntamiento AND "+
													   "SUnidad = CUNConsecutivo "+
				"LEFT OUTER JOIN TTA9207 ON SAyuntamiento = TAyuntamiento AND "+
										   "SConsecut = TConsSePu "+
				"INNER JOIN TCEdificio   ON CEDAyuntamiento = TAyuntamiento AND CEDClave = TEdificio "+
				"INNER JOIN TCPuesto     ON TAyuntamiento = CPUAyuntamiento AND TPuesto = CPUClave "+
				"INNER JOIN TCTipoIntegra ON TAyuntamiento = CTIAyuntamiento AND TTipoInte = CTIClave "+
				"WHERE SAyuntamiento = '"+ClavAyun+"' AND "+
					  "sunidad=CUNConsecutivo  " + Condicio + " "+
				"ORDER BY STipoNomina,SUnidad, SNumeroEmpleado "
if (BandQuer) Response.Write("1)<br>"+EjecInst+"<br><br>")
EjecComa.CommandText = EjecInst
ServPub = EjecComa.Execute()

while ( !ServPub.EOF )
 { ConSeAc = ServPub.Fields.Item("sconsecut").Value
   Campo02 = Request.Form('C02'+ConSeAc)  
   Campo03 = Request.Form('C03'+ConSeAc) 
   Campo04 = Request.Form('C04'+ConSeAc) 
   Campo05 = Request.Form('C05'+ConSeAc) 
   
   Campo06 = Request.Form('C06'+ConSeAc) 		
   Campo06 = ( String(Campo06) != "" && String(Campo06) != "undefined" )? "'"+Campo06+"'": "null"
				
   Campo07 = Request.Form('C07'+ConSeAc) 
   Campo08 = Request.Form('C08'+ConSeAc)
   Campo09 = Request.Form('C09'+ConSeAc)
   EjecInst = "UPDATE TTA9207 "+
   			  "SET    TEdificio = '"+Campo02+"', TTipoInte = '"+Campo03+"',"+
			  		 "TPuesto = '"  +Campo04+"', TCargo = '"   +Campo05+"', FAltaCargo= "+Campo06+", "+
					 "TTelefoOfic = '"+Campo07+"', TExtencion ='"+Campo08+"', TNota= '"+Campo09+"' "+
			  "WHERE  TAyuntamiento = '"+ClavAyun+"' AND "+
					 "TConsSePu = "+ConSeAc
   if (BandQuer) Response.Write("2)<br>"+EjecInst+"<br><br>")
   EjecComa.CommandText = EjecInst
   
   ServPub.MoveNext();
 } 

//----------------------------------------------------------------------------------------------
		  			   
//Cierra la conexion
ConeBase.Close() 
if (!BandQuer) Response.Redirect("ListaServidores.asp")
%>

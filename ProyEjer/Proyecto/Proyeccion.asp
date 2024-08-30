<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="/Css/stylesIntra.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript">

//Impreme el valor del numero separado en comas
function ImprDeci(Numero,Deci)
{  Monto = String(Numero).split(".")

  //Parte Entera
  PartEnte = String(Monto[0]).split("")
  LongCamp = PartEnte.length;
 
   
  //Verifica que no sea negativo
  Tope = 0
  if (PartEnte[0] == '-')
   Tope = 1
   
  ValoNuev = "";
  j = 1;
  for (i=LongCamp,j=1; i != Tope; i--,j++ )
	{ if (j == 4 || j == 7 || j == 10 || j == 13)
	     ValoNuev = ","+ValoNuev;
	  ValoNuev = PartEnte[i-1] + ValoNuev;
	}
  
  if (Tope == 1)
  	ValoNuev = '-' + ValoNuev;

  //Unir la entera con la fraccion
  ValoFrac=".00"
  if ( String(Monto[1]) != "undefined" )
   {   PartFrac = String(Monto[1]).split("")
       LongCamp = PartFrac.length;
       ValoFrac = ".";
	   switch (LongCamp)
	    { case 0:  ValoFrac = ".00"; break;
		  case 1:  ValoFrac = "."+PartFrac[0]+"0"; break;
		  default: ValoFrac = "."+PartFrac[0]+PartFrac[1]; break;
		 }
	    //for (i=0; i<Deci && Deci<=LongCamp; i++)
	    // ValoFrac += PartFrac[i];
      }  
	  
  ValoNuev = ValoNuev + ValoFrac

  document.write( ValoNuev)
}
</script>

<title>Tipo de Plaza</title>
</head>
<body>
<!--#include virtual="/Connections/ConeAdministracion.asp" -->
<!--#include virtual="/Intranet/Encabezados/Encabezado.asp" -->
<%

//Conecta a la base de datos
ConeBase = new ActiveXObject("ADODB.Connection")
EjecComa = new ActiveXObject("ADODB.Command")
ConeBase.ConnectionString = MM_ConeAdministracion_STRING;
ConeBase.Open() 
EjecComa.ActiveConnection = ConeBase
EjecComa.CommandType = 1
EjecComa.Prepared=true
	
BandQuer = false
if (String(Request.QueryString("Param0")) != "undefined" && 
    String(Request.QueryString("Param0")) != "") 
	BandQuer = true

//Limpa las tablas
if (String(Request.QueryString("Param1")) != "undefined" && 
	String(Request.QueryString("Param1")) != "" )
 {  EjecInst = "DELETE FROM YTPresupuestoServidor "+
			   "WHERE  SAyuntamiento = '"+ClavAyun+"' AND  "+
       				   "SEjercicio = "+ClavEjer+" "
	if (BandQuer) Response.Write("1)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	EjecComa.Execute()
	
	EjecInst = "DELETE FROM YTPresupuestoServidor_Detalle "+
			   "WHERE  PAyuntamiento = '"+ClavAyun+"' "
	if (BandQuer) Response.Write("2)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	EjecComa.Execute()
	 
 }	
	
	
if (String(Request.QueryString("Param2")) != "undefined" && 
	String(Request.QueryString("Param2")) != "" )
 {  EjecInst =  "INSERT INTO YTPresupuestoServidor "+
				"SELECT SAyuntamiento, "+ClavEjer+", SConsecut, SNumeroEmpleado, SNumeroEmpleadoAnt, SNumeroPlaza, "+
					   "SNombre, SApellidoPaterno, SApellidoMaterno, SRfc, SHomoclave, SHaciCodPos, SCurp, "+
					   "STipoNomina, SClaveProgramatica, SCategoria, "+
					   "SDireccion, SUnidad, STipoBanco, SNumeroRegistro, STipoRegistro, SFechaAlta, "+
					   "SSindicalizado, SIssemym, SCapiIndi, SCapIndObl, SCapIndVol "+
				"FROM   ATSerPub "+
				"WHERE  SAyuntamiento = '"+ClavAyun+"' AND "+
					   "SStatus = 'O' "
	if (BandQuer) Response.Write("3)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	EjecComa.Execute()
	
	//Carga la informacion que se tienen ejercido DE LAS PERCPCIONES
	EjecInst =  "INSERT INTO YTPresupuestoServidor_Detalle "+
				"SELECT  PAyuntamiento, PConsecutivoServidor, PClaveProgramatica, PTipoNomina, "+
						"PClavePercep, PPartida, CPDTabulador, PNumeroQuincena, CQNMesN, PImporte "+ //PUnidad,
				"FROM    NTPercepcionesQuincenal "+
				"INNER JOIN NCPercDedu ON PAyuntamiento = CPDAyuntamiento AND "+
										 "PClavePercep = CPDClave "+
				"INNER JOIN NCQuincena ON PAyuntamiento = CQNAyuntamiento AND "+
										 "PNumeroQuincena = CQNNoQuincea "+
				"WHERE PAyuntamiento = '"+ClavAyun+"' AND "+
					  "PEjercicio = "+ClavEjer+" "+
				"ORDER BY PConsecutivoServidor, CQNMesN "
	if (BandQuer) Response.Write("4)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	EjecComa.Execute()
	
	//Carga las deducciones del issemym
	EjecInst =  "INSERT INTO YTPresupuestoServidor_Detalle "+	
				"SELECT  DAyuntamiento, DConsecutivoServidor, DClaveProgramatica, DTipoNomina, "+
						"DClaveDeduccion, DPartida, CPDTabulador, "+
						"DNumeroQuincena, CQNMesN, DImporte "+
				"FROM    NTDeduccionesQuincenalAyto "+
				"INNER JOIN NCPercDedu ON DAyuntamiento = CPDAyuntamiento AND "+
										 "DClaveDeduccion = CPDClave "+
				"INNER JOIN NCQuincena ON DAyuntamiento = CQNAyuntamiento AND "+
										 "DNumeroQuincena = CQNNoQuincea "+
				"WHERE DAyuntamiento = '"+ClavAyun+"' AND DEjercicio = "+ClavEjer+" "
	if (BandQuer) Response.Write("5)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute()	
	
	EjecInst =  "SELECT MAX(SQuincena) AS UltiQuin "+
				"FROM   NTSerPub "+
				"WHERE  SAyuntamiento = '"+ClavAyun+"' AND "+
					   "SEjercicio = "+ClavEjer+" AND "+
					   "SQuincena < 25 "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute()	
	UltiQuin = (!Dummy.EOF) ?  Dummy.Fields.Item("UltiQuin").Value : 1;
	
	if (BandQuer) Response.Write("UltiQuin: <br>"+UltiQuin+"<br>")

	for (NumeQuin = UltiQuin+1; NumeQuin<25; NumeQuin++ )
	 {
		/*EjecInst =  "INSERT INTO YTPresupuestoServidor_Detalle "+
					"SELECT  PAyuntamiento, PConsecutivoServidor, PClaveProgramatica, PTipoNomina, "+
							" PClavePercep, PPartida, CPDTabulador, PNumeroQuincena, CQNMesN, PImporte "+ //PUnidad,
					"FROM    NTPercepcionesQuincenal "+
					"INNER JOIN NCPercDedu ON PAyuntamiento = CPDAyuntamiento AND "+
											 "PClavePercep = CPDClave "+
					"INNER JOIN NCQuincena ON PAyuntamiento = CQNAyuntamiento AND "+
											  "CQNNoQuincea = "+NumeQuin+ " "+
					"WHERE PAyuntamiento = '"+ClavAyun+"' AND "+
						  "PEjercicio = "+ClavEjer+" AND "+
						  "PNumeroQuincena = "+UltiQuin+" "
					"ORDER BY PConsecutivoServidor, CQNMesN "*/
		EjecInst =  "INSERT INTO YTPresupuestoServidor_Detalle "+			
					"SELECT  PAyuntamiento, PServidorPublico, PClaveProgramatica, "+
							"PTipoNomina, PTipoPers, PPartida, PClasTabu, "+NumeQuin+", 0, PImporte "+
					"FROM    YTPresupuestoServidor_Detalle "+
					"Where  PAyuntamiento  = '"+ClavAyun+"' AND "+
						   "PQuincena = "+UltiQuin+" "		
		if (BandQuer) Response.Write("6)<br>"+EjecInst+"<br><br>")
		EjecComa.CommandText = EjecInst
		EjecComa.Execute()	 
	 }
	 
	EjecInst =  "UPDATE YTPresupuestoServidor_Detalle "+
				"SET    PMes = CQNMesN "+
				"FROM   NCQuincena "+
				"WHERE  PAyuntamiento = CQNAyuntamiento AND "+
					   "PQuincena = CQNNoQuincea AND "+
					   "PAyuntamiento = '"+ClavAyun+"'  "
	if (BandQuer) Response.Write("7)<br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	EjecComa.Execute()	 
		 
 }	
 			
	//Para definir el tipo
	//A.Ayto D:Dif O: Opdapas
	EjecInst  = "SELECT CAYTipo "
	EjecInst += "FROM   Acceso.dbo.ACAyuntamiento "
	EjecInst += "WHERE  CAYClave = '"+ClavAyun+"' "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 
	  
	TipoADO = "A"  
    if (!Dummy.EOF)
	  TipoADO  = Dummy.Fields.Item("CAYTipo").Value;
	
    //TOP 900 
	EjecInst  = "SELECT CFGClave AS Clave, CFGDescripcion AS Descripcion, "+
						"convert(char,SUM(PImporte),103) as Tot,SUM(PImporte) AS Tota,"+
						"convert(char,SUM(CASE WHEN PMes = 1  THEN PImporte ELSE 0 END),103) as Ene,"+
						"convert(char,SUM(CASE WHEN PMes = 2  THEN PImporte ELSE 0 END),103) as Feb,"+
						"convert(char,SUM(CASE WHEN PMes = 3  THEN PImporte ELSE 0 END),103) as Mar,"+
						"convert(char,SUM(CASE WHEN PMes = 4  THEN PImporte ELSE 0 END),103) as Abr,"+
						"convert(char,SUM(CASE WHEN PMes = 5  THEN PImporte ELSE 0 END),103) as May,"+
						"convert(char,SUM(CASE WHEN PMes = 6  THEN PImporte ELSE 0 END),103) as Jun,"+
						"convert(char,SUM(CASE WHEN PMes = 7  THEN PImporte ELSE 0 END),103) as Jul,"+
						"convert(char,SUM(CASE WHEN PMes = 8  THEN PImporte ELSE 0 END),103) as Ago,"+
						"convert(char,SUM(CASE WHEN PMes = 9  THEN PImporte ELSE 0 END),103) as Sep,"+
						"convert(char,SUM(CASE WHEN PMes = 10 THEN PImporte ELSE 0 END),103) as Oct,"+
						"convert(char,SUM(CASE WHEN PMes = 11 THEN PImporte ELSE 0 END),103) as Nov,"+
						"convert(char,SUM(CASE WHEN PMes = 12 THEN PImporte ELSE 0 END),103) as Dic "+
				"FROM  YTPresupuestoServidor_Detalle "+
				"INNER JOIN Acceso.dbo.ACDependenciaGeneralOSFEM ON Substring(PClaveProgramatica,1,3) = CFGClave AND "+
																   "CFGTipo = '"+TipoADO+"' "+
				"Where PAyuntamiento = '"+ClavAyun+"' AND "+
					  "PPartida < 2000 "+
				"GROUP BY CFGClave, CFGDescripcion "+
				"ORDER BY CFGClave, CFGDescripcion "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 


%>
<table width="1170" class="resultados">
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
	  <a href="Proyeccion.asp?Param1=I">
	  <img src="/Intranet/Adminis/Imagen/BDLimpia.png" title="Limpiar base" width="35" height="30" border="0" /></a><br />
	  1)Limpia BD </td>
    <td>
	  <a href="Proyeccion.asp?Param2=C">
	  <img src="/Intranet/Adminis/Imagen/BDArchBase.jpg" title="Cargar Base" width="30" height="30" border="0" /></a><br />
      2) Copia BD</td>
    <td>&nbsp;</td>
    <td><a href="ProyeccionTN.asp">TipoNomina</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="Tabulador.asp?Param=I" target="_blank"><img src="/Intranet/Encabezados/Img/BtnABC_I.gif" title="Impresora" width="18" height="18" border="0" /></a><a href="Tabulador.asp?Param=E" target="_blank"><img src="/Intranet/Encabezados/Img/OficcesE.gif" tittel="Exportar a excel" width="18" height="18" border="0" /></a>Tabulador</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width="30">No</th>
    <th width="100">Servidor</th>
    <th width="80">Total</th>
    <th width="80">Enero</th>
    <th width="80">Febrer </th>
    <th width="80">Marzo</th>
    <th width="80">Abril</th>
    <th width="80">Mayo</th>
    <th width="80">Juni</th>
    <th width="80">Julio</th>
    <th width="80">Agos</th>
    <th width="80">Sep</th>
    <th width="80">Oct</th>
    <th width="80">Nov</th>
    <th width="80">Dic.</th>
  </tr>
  <%
    EncScr = "<script> ImprDeci(" 
	FinScr = ",2); </script>"
	ImpoT = 0
	ImpTotaT = 0; 
	ImpEnerT = 0; ImpFebrT = 0; ImpMarzT = 0;
	ImpAbriT = 0; ImpMayoT = 0; ImpJuniT = 0;
	ImpJuliT = 0; ImpAgosT = 0; ImpSeptT = 0;
	ImpOctuT = 0; ImpNoviT = 0; ImpDiciT = 0;

    while (!Dummy.EOF)
	 { //Carga el primer Renglon Gratifica, ISR, ISR_Quin
		ClavDepe  = Dummy.Fields.Item("Clave").Value;
		DescDepe = Dummy.Fields.Item("Descripcion").Value;
		ImpoTota = Dummy.Fields.Item("Tot").Value;	
		ImpTotaT +=	Number(String(ImpoTota).replace(/,/gi,''))
		ImpoEner = Dummy.Fields.Item("Ene").Value;
		ImpEnerT +=	Number(String(ImpoEner).replace(/,/gi,''))
		ImpoFebr = Dummy.Fields.Item("Feb").Value;
		ImpFebrT +=	Number(String(ImpoFebr).replace(/,/gi,''))
		ImpoMarz = Dummy.Fields.Item("Mar").Value; 
		ImpMarzT +=	Number(String(ImpoMarz).replace(/,/gi,''))
		ImpoAbri = Dummy.Fields.Item("Abr").Value;
		ImpAbriT +=	Number(String(ImpoAbri).replace(/,/gi,''))
		ImpoMayo = Dummy.Fields.Item("May").Value;
		ImpMayoT +=	Number(String(ImpoMayo).replace(/,/gi,''))
		ImpoJuni = Dummy.Fields.Item("Jun").Value;
		ImpJuniT +=	Number(String(ImpoJuni).replace(/,/gi,''))
		ImpoJuli = Dummy.Fields.Item("Jul").Value;
		ImpJuliT +=	Number(String(ImpoJuli).replace(/,/gi,''))
		ImpoAgos = Dummy.Fields.Item("Ago").Value;
		ImpAgosT +=	Number(String(ImpoAgos).replace(/,/gi,''))
		ImpoSept = Dummy.Fields.Item("Sep").Value; 
		ImpSeptT +=	Number(String(ImpoSept).replace(/,/gi,''))
		ImpoOctu  = Dummy.Fields.Item("Oct").Value;
		ImpOctuT +=	Number(String(ImpoOctu).replace(/,/gi,''))
		ImpoNovi = Dummy.Fields.Item("Nov").Value;
		ImpNoviT +=	Number(String(ImpoNovi).replace(/,/gi,''))
		ImpoDici = Dummy.Fields.Item("Dic").Value; 
		ImpDiciT +=	Number(String(ImpoDici).replace(/,/gi,''))
		ImpoTot1 = Dummy.Fields.Item("Tota").Value;		
		ImpoT = ImpoT + ImpoTot1
		%>			
  <tr  onmouseover="this.style.background='#D6D6D6';" onmouseout="this.style.background = '';" align="right" valign="top">
    <td><a href="PresupuestoDependen_Partida.asp?Param=<%= ClavDepe%>&Param1=<%=DescDepe%>&Paratot=<%=ImpoTot1%>"><%= ClavDepe%></a></td>
    <td align="left"><%=DescDepe%></td>
    <td><%=ImpoTota%></td>
    <td><%=ImpoEner%></td>
    <td><%=ImpoFebr%></td>
    <td><%=ImpoMarz%></td>
    <td><%=ImpoAbri%></td>
    <td><%=ImpoMayo%></td>
    <td><%=ImpoJuni%></td>
    <td><%=ImpoJuli%></td>
    <td><%=ImpoAgos%></td>
    <td><%=ImpoSept%></td>
    <td><%=ImpoOctu%></td>
    <td><%=ImpoNovi%></td>
    <td><%=ImpoDici%></td>
  </tr>
  <% Dummy.MoveNext();

		}  %>
  <tr align="right">
    <td><br /></td>
    <td>&nbsp;</td>
    <td><%Response.Write(EncScr+ImpoT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpEnerT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpFebrT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpMarzT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpAbriT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpMayoT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpJuniT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpJuliT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpAgosT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpSeptT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpOctuT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpNoviT+FinScr)%></td>
    <td><%Response.Write(EncScr+ImpDiciT+FinScr)%></td>
  </tr>
<%		
//Cerrar conexion
ConeBase.Close()
%>
</table>
</body>
</html>

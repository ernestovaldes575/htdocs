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
<%
//Encabezado
AAcceso = new Array();
AAcceso =  String(Request.Cookies("CAcceso")).split("|")
ClavAyun = AAcceso[4]
DescAyun = AAcceso[5]

 //Conecta a la base de datos
ConeBase = new ActiveXObject("ADODB.Connection")
EjecComa = new ActiveXObject("ADODB.Command")
ConeBase.ConnectionString = MM_ConeAdministracion_STRING;
ConeBase.Open() 
EjecComa.ActiveConnection = ConeBase
EjecComa.CommandType = 1
EjecComa.Prepared=true

if (String(Request.QueryString("Param")) != "undefined" && 
	String(Request.QueryString("Param")) != "") 
  { Salida =  String(Request.QueryString("Param"))
	switch (Salida) 
	 { case "I": //Imptresora
			Response.Write("<script language='javascript'> window.print(); </script>"); break;
	   case "E": //Excel
			Response.ContentType = "application/x-msexcel"; break;		
	 }	    
  }

BandQuer = false
if (String(Request.QueryString("Param0")) != "undefined" && 
	String(Request.QueryString("Param0")) != "") 
	BandQuer = true


//borra tabla Caraga el tabulador 
EjecInst  = "DELETE FROM PTPresupuestoServidor_Tabu01 "
EjecInst += "WHERE PAyuntamiento = '"+ClavAyun+"' "
if (BandQuer) Response.Write("1)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 


//Cargar todos los SP
EjecInst  = "INSERT INTO  PTPresupuestoServidor_Tabu01 "
EjecInst += "SELECT PTPresupuestoServidor.PAyuntamiento,PTPresupuestoServidor.PCategoria,0 as SerPub, 0 AS General, 0 AS Sindical,0 as Eventu, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 1 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Dietas, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 2 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS General, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 3 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Gratifica, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 4 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Compe, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 5 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Otras, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 6 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Prima, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu = 7 THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Aguinaldo, "
EjecInst += 	 "SUM(CASE WHEN PClasTabu in (1,2,3,4,5,6,7) THEN PTPresupuestoServidor_Detalle.PImporte ELSE 0 END) AS Total "
EjecInst += "FROM  PTPresupuestoServidor_Detalle "
EjecInst += "LEFT OUTER JOIN PTPresupuestoServidor ON PTPresupuestoServidor.PAyuntamiento = PTPresupuestoServidor_Detalle.PAyuntamiento AND "
//EjecInst += 										 "PTPresupuestoServidor.PTIPONOMINA  = PTPresupuestoServidor_Detalle.PTIPONOMINA AND "
EjecInst += 										 "PTPresupuestoServidor.PConsecutivo =PTPresupuestoServidor_Detalle.PServidorPublico "
EjecInst += "WHERE PTPresupuestoServidor.PAyuntamiento = '"+ClavAyun+"' and PTPresupuestoServidor.PTIPONOMINA NOT in ('99')  "
EjecInst += "GROUP BY PTPresupuestoServidor.PAyuntamiento,PTPresupuestoServidor.PCategoria "
if (BandQuer) Response.Write("2)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute()


/*
Verificar
SELECT SUM(PDietas) AS dieta, SUM(PSueldo) AS sueld, SUM(PCompensa) AS comp, 
	   SUM(PPrima) AS prim, SUM(PAguinaldo) AS agui, SUM(PGratificacion) AS grat, 
	   SUM(POtros) AS otro, SUM(PTotal) AS total
FROM     PTPresupuestoServidor_Tabu01
WHERE  (PAyuntamiento = 105) */

//Cargan el total de plazas
EjecInst  = "INSERT INTO PTPresupuestoServidor_Tabu01 "
EjecInst += "SELECT PAyuntamiento,PCategoria, count(*) as SerPub,"
EjecInst += 	"SUM(CASE WHEN PtipoNomina in ('00','02','03','04','08','09') THEN 1 ELSE 0 END) AS General,"
EjecInst += 	"SUM(CASE WHEN PtipoNomina = '01' THEN 1 ELSE 0 END) AS Sindical,"
EjecInst += 	"SUM(CASE WHEN PtipoNomina in ('05','07','10') THEN 1 ELSE 0 END) AS Event,"
EjecInst += 	"SUM(0) AS Dietas, SUM(0) AS General,sUM(0) AS cOMP,sum(0) as Prima, sum(0) as Aguinaldo,sum(0) as Grat,sum(0) as Otros, sum(0) as Total "
EjecInst += "FROM PTPresupuestoServidor "
EjecInst += "WHERE PAyuntamiento = '"+ClavAyun+"' and PTPresupuestoServidor.PTIPONOMINA NOT in ('99')  "
EjecInst += "GROUP BY PAyuntamiento,PCategoria "
if (BandQuer) Response.Write("3)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

//borra tabla Caraga el tabulador 
EjecInst  = "DELETE FROM PTPresupuestoServidor_Tabu02 "
EjecInst += "WHERE PAyuntamiento = '"+ClavAyun+"' "
if (BandQuer) Response.Write("4)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

EjerTabu = 2023

//Conjuntamos la informacion del Tabu01
EjecInst  = "INSERT INTO PTPresupuestoServidor_Tabu02 "
EjecInst += "SELECT  PAyuntamiento,PCategoria,'2',' ' , ' ' ,0, "
EjecInst += 	    "SUM(PServPubli), SUM(PServPubliGral), SUM(PServPubliSind),SUM(PServPubliEven),"
EjecInst += 		"SUM(PDietas), SUM(PSueldo), SUM(PGratificacion), sum(pCOMPENSA), SUM(POtros), SUM(PPrima),SUM(PAguinaldo), SUM(PTotal) "
EjecInst += "FROM   PTPresupuestoServidor_Tabu01 "
EjecInst += "INNER JOIN NCCategorias ON PTPresupuestoServidor_Tabu01.PAyuntamiento = NCCategorias.CCAAyuntamiento AND "
EjecInst += 						   "PTPresupuestoServidor_Tabu01.PCategoria = NCCategorias.CCAClave and CCAEjercicio = "+EjerTabu+" "
EjecInst += "WHERE PAyuntamiento = '"+ClavAyun+"' "
EjecInst += "GROUP BY PAyuntamiento,PCategoria "
if (BandQuer) Response.Write("5) <br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 


//Actualizar datos
EjecInst  = "Update  PTPresupuestoServidor_Tabu02  "
EjecInst += "SET     PCate=CCADescripcion,"//" SUBSTRING(NCCategorias.CCADescripcion, 1, LEN(NCCategorias.CCADescripcion) - CHARINDEX(' ', REVERSE(NCCategorias.CCADescripcion)))," 
//EjecInst += 		"PRango=SUBSTRING(NCCategorias.CCADescripcion, LEN(NCCategorias.CCADescripcion) - CHARINDEX(' ', REVERSE(NCCategorias.CCADescripcion)) + 2, CHARINDEX(' ', REVERSE(NCCategorias.CCADescripcion))), "
EjecInst += 		"PSueldoBase=CCASueldoQn "
EjecInst += "FROM    NCCategorias "
EjecInst += "Where   PTPresupuestoServidor_Tabu02.PCategoria = NCCategorias.CCAClave AND CCAAyuntamiento = '"+ClavAyun+"' AND  "
EjecInst += 		"CCAEjercicio = "+EjerTabu+" "
if (BandQuer) Response.Write("6)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 


//Actualiza el tipo de nomina
EjecInst  = "UPDATE PTPresupuestoServidor_Tabu02 "
EjecInst += "SET    PTipoNomina='00' "
EjecInst += "WHERE  PAyuntamiento = '"+ClavAyun+"' AND PCate LIKE '%PRESI%' OR PCate LIKE '%REGI%' OR PCate LIKE '%SINDI%' "
if (BandQuer) Response.Write("7)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

//Actualiza el tipo de nomina
EjecInst  = "UPDATE PTPresupuestoServidor_Tabu02 "
EjecInst += "SET    PTipoNomina='01' "
EjecInst += "WHERE  PAyuntamiento = '"+ClavAyun+"' AND PCate LIKE '%DIREC%' OR PCate LIKE '%SUBD%' OR "
EjecInst += 	   "PCate LIKE '%JEFE%' OR PCate LIKE '%COOR%' "
if (BandQuer) Response.Write("8)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

//Actualiza el tipo de nomina
EjecInst  = "UPDATE PTPresupuestoServidor_Tabu02 "
EjecInst += "SET    PTipoNomina='04' "
EjecInst += "WHERE  PAyuntamiento = '"+ClavAyun+"' AND PCate LIKE '%POLICI%'  "
if (BandQuer) Response.Write("9)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

EjecInst  = "INSERT INTO PTPresupuestoServidor_Tabu02 "
EjecInst += "SELECT PAyuntamiento,'', '3' , PCate, PRango, SUM(DISTINCT PSueldoBase), "
EjecInst += 	    "SUM(PServPubli), SUM(PServPubliGral), SUM(PServPubliSind),SUM(PServPubliEven), SUM(PDietas), SUM(Psueldo)," 
EjecInst += 		"SUM(PGratificacion),SUM(Pcompensa),SUM(POtros),SUM(PPrima), SUM(PAguinaldo),  SUM(PTotal) "
EjecInst += "FROM   PTPresupuestoServidor_Tabu02 " 
EjecInst += "WHERE  PAyuntamiento = '"+ClavAyun+"' AND PTipoNomina = '04' "
EjecInst += "GROUP BY PAyuntamiento,PTipoNomina, PCate, PRango "
if (BandQuer) Response.Write("10)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

EjecInst  = "DELETE PTPresupuestoServidor_Tabu02 "
EjecInst += "WHERE  PAyuntamiento = '"+ClavAyun+"' AND PTipoNomina='04' "
if (BandQuer) Response.Write("11)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
EjecComa.Execute() 

//Crarga los totales de los servidores publicos
EjecInst  = "SELECT CONVERT(CHAR,SUM(CASE WHEN PClasTabu in (1,2,3,4,5,6,7) THEN PImporte  ELSE 0 END),108) AS Sueldo,"
EjecInst +=        "CONVERT(CHAR,SUM(CASE WHEN PClasTabu = 8  THEN PImporte ELSE 0 END),108) AS Issemym,"
EjecInst +=        "CONVERT(CHAR,SUM(CASE WHEN PClasTabu = 0  THEN PImporte ELSE 0 END),108) AS Liqui,"
EjecInst +=        "CONVERT(CHAR,SUM(CASE WHEN PClasTabu = 0  THEN PImporte ELSE 0 END),108) AS Noti,"
EjecInst +=        "CONVERT(CHAR,SUM(CASE WHEN PClasTabu = 9 THEN PImporte ELSE 0 END),108) AS Suteym, "
EjecInst +=        "CONVERT(CHAR,SUM(PImporte),108) AS Total "
EjecInst += "FROM   PTPresupuestoServidor_Detalle "
EjecInst += "WHERE  PAyuntamiento = '"+ClavAyun+"' AND PPartida < 2000 AND PTIPONOMINA NOT in ('99') "
if (BandQuer) Response.Write("12)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
Dummy = EjecComa.Execute() 

MontSuel = 0; MontIsse = 0; MontLiqu = 0; MontNoti = 0; MontSute = 0; MontTota = 0;
if  (!Dummy.EOF)
  { //Carga el PCate, , , , , , , , ,  
	MontSuel = Dummy.Fields.Item("Sueldo").Value;
	MontIsse = Dummy.Fields.Item("Issemym").Value;		
	MontLiqu = Dummy.Fields.Item("Liqui").Value;
	MontNoti = Dummy.Fields.Item("Noti").Value;
	MontSute = Dummy.Fields.Item("Suteym").Value; 
	MontTota = Dummy.Fields.Item("Total").Value;
  } 

//TOP 900 
EjecInst  = "SELECT PCate, PRango, PServPubli, PServPubliGral, PServPubliSind, PServPubliEven, "
EjecInst +=        "Convert(char,PDietas,108) AS PDietas, Convert(char,Psueldo,108) AS Psueldo, Convert(char,PCompensa,108) AS PCompensa,"
EjecInst +=		   "Convert(char,PPrima,108) AS PPrima, Convert(char,PAguinaldo,108) AS PAguinaldo,Convert(char,PGratificacion,108) AS PGratificacion, Convert(char,POtros,108) as POtros, Convert(char,PTotal,108) as Total,PTotal "
EjecInst += "FROM  PTPresupuestoServidor_Tabu02 "
EjecInst += "WHERE PAyuntamiento = '"+ClavAyun+"' AND PTIPONOMINA NOT in ('99') "
EjecInst += "Order by PCate,PTipoNomina,PSueldoBase DESC  "
if (BandQuer) Response.Write("13)<br>"+EjecInst+"<br>")
EjecComa.CommandText = EjecInst
Dummy = EjecComa.Execute() 

%>
<table  cellspacing="0" class="resultados">
  <tr>
    <td width="67" valign="top"><img src="/Intranet/Encabezados/Aytos/<%=ClavAyun%>E.jpg" width="65" height="61" border="0" /></td>
    <td width="121" valign="top"><br />
      <%=DescAyun%></td>
    <td width="315">&nbsp;</td>
    <td width="67"><img src="/Intranet/Encabezados/Img/Osfem.jpg" alt="Modificacion Presupuesto" width="57" height="52" border="0" /></td>
    <td width="388" valign="top">&Oacute;RGANO SUPERIOR DE FISCALIZACI&Oacute;N DEL ESTADO DE M&Eacute;XICO </td>
  </tr>
  <tr>
    <td colspan="5"><div align="center">PRESUPUESTO DE EGRESOS PARA EL EJERCICIO 2020 <br />
      (TABULADOR) </div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">LOCALIDAD BENEFICIADA </td>
    <td colspan="3">TODO EL MUNICIPIO DE ZINACANTEPEC</td>
  </tr>
  <tr>
    <td colspan="2">POBLACI&Oacute;N BENEFICIADA </td>
    <td colspan="3">TODO EL MUNICIPIO DE ZINACANTEPEC</td>
  </tr>
</table>
<table width="1235" class="resultados">
  <tr style="font-size:10px">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td align="center">0101</td>
    <td align="center">0102, 0206 </td>
    <td align="center">0105, 0106, 0516, 0525, 0813, 0814</td>
    <td align="center">0104</td>
    <td align="center">0301,  0511, 0512,815</td>
    <td align="center">0305, 0809</td>
    <td align="center">0306, 0807</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="font-size:10px">
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>1111</th>
    <th>1131,1211</th>
    <th>1345,1346</th>
    <th>1341</th>
    <th>1311, 1541, 1542, 1595 </th>
    <th>1321</th>
    <th>1322</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <th width="209">Cate</th>
    <th width="46">Rango</th>
    <th width="84">Total</th>
    <th width="65">General </th>
    <th width="59">Sindi</th>
    <th width="41">Event</th>
    <th width="84">Dieta</th>
    <th width="84">Sueldo</th>
    <th width="64">Gratif</th>
    <th width="64">Compens</th>
    <th width="84">Otros</th>
    <th width="84">Prima</th>
    <th width="84">Aguinaldo</th>
    <th width="95">Total</th>
  </tr>
  <%
    EncScr = "<script> ImprDeci(" 
	FinScr = ",2); </script>"
	ImpoT = 0
    while (!Dummy.EOF)
	 { //Carga el PCate, , , , , , , , ,
		CateTabu = Dummy.Fields.Item("PCate").Value;
		RangTabu = Dummy.Fields.Item("PRango").Value;		
		TotaServ = Dummy.Fields.Item("PServPubli").Value;
		ServGene = Dummy.Fields.Item("PServPubliGral").Value;
		ServSind = Dummy.Fields.Item("PServPubliSind").Value; 
		ServEven = Dummy.Fields.Item("PServPubliEven").Value; 
		ImpoDiet = Dummy.Fields.Item("PDietas").Value;
		Compensa = Dummy.Fields.Item("PCompensa").Value;
		ImpoGene = Dummy.Fields.Item("Psueldo").Value;
		ImpoPrim = Dummy.Fields.Item("PPrima").Value;
		ImpoAgui = Dummy.Fields.Item("PAguinaldo").Value;
		ImpoGrat = Dummy.Fields.Item("PGratificacion").Value;
		ImpoOtro = Dummy.Fields.Item("POtros").Value;
		ImpoTota = Dummy.Fields.Item("Total").Value;
		ImpoTot1 = Number(Dummy.Fields.Item("PTotal").Value);
		ImpoT = ImpoT + ImpoTot1
		%>			
  <tr  onmouseover="this.style.background='#D6D6D6';" onmouseout="this.style.background = '';" align="right" valign="top">
    <td align="left"><%=CateTabu%></td>
    <td><%=RangTabu%></td>
    <td><%=TotaServ%></td>
    <td><%=ServGene%></td>
    <td><%=ServSind%></td>
    <td><%=ServEven%></td>
    <td><%=ImpoDiet%></td>
    <td><%=ImpoGene%></td>
    <td><%=ImpoGrat%></td>
    <td><%=Compensa%></td>
    <td><%=ImpoOtro%></td>
    <td><%=ImpoPrim%></td>
    <td><%=ImpoAgui%></td>
    <td><%=ImpoTota%></td>
  </tr>
  <% Dummy.MoveNext();

		}  %>
  <tr align="right">
    <td><br /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#E8FFE8"><%Response.Write(EncScr+ImpoT+FinScr)%></td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Sueldo</td>
    <td bgcolor="#E8FFE8"><%=MontSuel%></td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3" style="font-size:10px">5540-555544, 5546,5548 </td>
    <td  style="font-size:10px">1412-1416 </td>
    <td>Issemym</td>
    <td><%=MontIsse%> </td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Liquidacion</td>
    <td><%=MontLiqu%></td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Notificacion</td>
    <td><%=MontNoti%></td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3" style="font-size:10px">0120,0521,0523,0524,0526</td>
    <td style="font-size:10px">1546</td>
    <td>Suteym</td>
    <td><%=MontSute%></td>
  </tr>
  <tr align="right">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td><%=MontTota%></td>
  </tr>
  <%		
//Cerrar conexion
ConeBase.Close()

%>
</table>
</body>
</html>

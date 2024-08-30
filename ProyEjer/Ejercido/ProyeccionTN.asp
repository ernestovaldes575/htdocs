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

%>
<table width="1170" class="resultados">
  
  <tr>
    <td>&nbsp;</td>
    <td><a href="Proyeccion.asp"></a> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="Proyeccion.asp">Dep Gral</a></td>
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

	EjecInst  = "SELECT PTipoNomina AS Clave, CTNDescripcion AS Descripcion, "+
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
				"INNER JOIN NCTipoNomina ON PAyuntamiento = CTNAyuntamiento AND "+
										   "PTipoNomina = CTNClave "+
				"Where PAyuntamiento = '"+ClavAyun+"' AND "+
				      "PTipoPers not in ('5540','5541','5542','5543','5544','5546','5548') AND "+
					  "PPartida < 2000 "+
				"GROUP BY PTipoNomina, CTNDescripcion "+
				"ORDER BY PTipoNomina, CTNDescripcion "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 

    while (!Dummy.EOF)
	 { //Carga el primer Renglon Gratifica, ISR, ISR_Quin
		ClavDepe  = Dummy.Fields.Item("Clave").Value;
		DescDepe = Dummy.Fields.Item("Descripcion").Value;
		ImpoTota = Dummy.Fields.Item("Tot").Value;	
		ImpoEner = Dummy.Fields.Item("Ene").Value;	
		ImpoFebr = Dummy.Fields.Item("Feb").Value;		
		ImpoMarz = Dummy.Fields.Item("Mar").Value; 
		ImpoAbri = Dummy.Fields.Item("Abr").Value;
		ImpoMayo = Dummy.Fields.Item("May").Value;
		ImpoJuni = Dummy.Fields.Item("Jun").Value;
		ImpoJuli = Dummy.Fields.Item("Jul").Value;
		ImpoAgos = Dummy.Fields.Item("Ago").Value;
		ImpoSept = Dummy.Fields.Item("Sep").Value; 
		ImpoOctu  = Dummy.Fields.Item("Oct").Value;		
		ImpoNovi = Dummy.Fields.Item("Nov").Value;
		ImpoDici = Dummy.Fields.Item("Dic").Value; 
		%>			
  <tr  onmouseover="this.style.background='#D6D6D6';" onmouseout="this.style.background = '';" align="right" valign="top">
    <td><%= ClavDepe%></td>
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

		}  
    //Suma
	EjecInst  = "SELECT convert(char,SUM(PImporte),103) as Tot,SUM(PImporte) AS Tota,"+
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
				"INNER JOIN NCTipoNomina ON PAyuntamiento = CTNAyuntamiento AND "+
										   "PTipoNomina = CTNClave "+
				"Where PAyuntamiento = '"+ClavAyun+"' AND "+
				      "PTipoPers not in ('5540','5541','5542','5543','5544','5546','5548') "
					  "PPartida < 2000 "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 
	
    ImpTotaT = 0; 
	ImpEnerT = 0; ImpFebrT = 0; ImpMarzT = 0;
	ImpAbriT = 0; ImpMayoT = 0; ImpJuniT = 0;
	ImpJuliT = 0; ImpAgosT = 0; ImpSeptT = 0;
	ImpOctuT = 0; ImpNoviT = 0; ImpDiciT = 0;
    if (!Dummy.EOF)
	 {  ImpTotaT = Dummy.Fields.Item("Tota").Value;
		ImpEnerT = Dummy.Fields.Item("Ene").Value;
		ImpFebrT = Dummy.Fields.Item("Feb").Value;
		ImpMarzT = Dummy.Fields.Item("Mar").Value; 
		ImpAbriT = Dummy.Fields.Item("Abr").Value;
		ImpMayoT = Dummy.Fields.Item("May").Value;
		ImpJuniT = Dummy.Fields.Item("Jun").Value;
		ImpJuliT = Dummy.Fields.Item("Jul").Value;
		ImpAgosT = Dummy.Fields.Item("Ago").Value;
		ImpSeptT = Dummy.Fields.Item("Sep").Value;
		ImpOctuT = Dummy.Fields.Item("Oct").Value;
		ImpNoviT = Dummy.Fields.Item("Nov").Value;
		ImpDiciT = Dummy.Fields.Item("Dic").Value;
    }  		
		%>
  <tr align="right" bgcolor="#F2F2F2">
    <td><br /></td>
    <td>&nbsp;</td>
    <td><%=ImpTotaT%></td>
    <td><%=ImpEnerT%></td>
    <td><%=ImpFebrT%></td>
    <td><%=ImpMarzT%></td>
    <td><%=ImpAbriT%></td>
    <td><%=ImpMayoT%></td>
    <td><%=ImpJuniT%></td>
    <td><%=ImpJuliT%></td>
    <td><%=ImpAgosT%></td>
    <td><%=ImpSeptT%></td>
    <td><%=ImpOctuT%></td>
    <td><%=ImpNoviT%></td>
    <td><%=ImpDiciT%></td>
  </tr>
   <tr >
      <td bgcolor="#FFDE5B">&nbsp;</td>
      <td colspan="8" align="left" bgcolor="#FFDE5B">Issemym</td>
      <td bgcolor="#FFDE5B">&nbsp;</td>
      <td bgcolor="#FFDE5B">&nbsp;</td>
      <td bgcolor="#FFDE5B">&nbsp;</td>
      <td bgcolor="#FFDE5B">&nbsp;</td>
      <td bgcolor="#FFDE5B">&nbsp;</td>
      <td bgcolor="#FFDE5B">&nbsp;</td>
    </tr>  
    <%
	EjecInst  = "SELECT PTipoNomina AS Clave, CTNDescripcion AS Descripcion, "+
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
				"INNER JOIN NCTipoNomina ON PAyuntamiento = CTNAyuntamiento AND "+
										   "PTipoNomina = CTNClave "+
				"Where PAyuntamiento = '"+ClavAyun+"' AND "+
				      "PTipoPers in ('5540','5541','5542','5543','5544','5546','5548') AND "+
					  "PPartida < 2000 "+
				"GROUP BY PTipoNomina, CTNDescripcion "+
				"ORDER BY PTipoNomina, CTNDescripcion "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 

    while (!Dummy.EOF)
	 { //Carga el primer Renglon Gratifica, ISR, ISR_Quin
		ClavDepe  = Dummy.Fields.Item("Clave").Value;
		DescDepe = Dummy.Fields.Item("Descripcion").Value;
		ImpoTota = Dummy.Fields.Item("Tot").Value;	
		ImpoEner = Dummy.Fields.Item("Ene").Value;	
		ImpoFebr = Dummy.Fields.Item("Feb").Value;		
		ImpoMarz = Dummy.Fields.Item("Mar").Value; 
		ImpoAbri = Dummy.Fields.Item("Abr").Value;
		ImpoMayo = Dummy.Fields.Item("May").Value;
		ImpoJuni = Dummy.Fields.Item("Jun").Value;
		ImpoJuli = Dummy.Fields.Item("Jul").Value;
		ImpoAgos = Dummy.Fields.Item("Ago").Value;
		ImpoSept = Dummy.Fields.Item("Sep").Value; 
		ImpoOctu  = Dummy.Fields.Item("Oct").Value;		
		ImpoNovi = Dummy.Fields.Item("Nov").Value;
		ImpoDici = Dummy.Fields.Item("Dic").Value; 
		%>			
  <tr  onmouseover="this.style.background='#D6D6D6';" onmouseout="this.style.background = '';" align="right" valign="top">
    <td><%= ClavDepe%></td>
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

		}  
    //Suma
	EjecInst  = "SELECT convert(char,SUM(PImporte),103) as Tot,SUM(PImporte) AS Tota,"+
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
				"INNER JOIN NCTipoNomina ON PAyuntamiento = CTNAyuntamiento AND "+
										   "PTipoNomina = CTNClave "+
				"Where PAyuntamiento = '"+ClavAyun+"' AND "+
				      "PTipoPers in ('5540','5541','5542','5543','5544','5546','5548') AND "+
					  "PPartida < 2000 "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 
	
    ImpTotaT = 0; 
	ImpEnerT = 0; ImpFebrT = 0; ImpMarzT = 0;
	ImpAbriT = 0; ImpMayoT = 0; ImpJuniT = 0;
	ImpJuliT = 0; ImpAgosT = 0; ImpSeptT = 0;
	ImpOctuT = 0; ImpNoviT = 0; ImpDiciT = 0;
    if (!Dummy.EOF)
	 {  ImpTotaT = Dummy.Fields.Item("Tota").Value;
		ImpEnerT = Dummy.Fields.Item("Ene").Value;
		ImpFebrT = Dummy.Fields.Item("Feb").Value;
		ImpMarzT = Dummy.Fields.Item("Mar").Value; 
		ImpAbriT = Dummy.Fields.Item("Abr").Value;
		ImpMayoT = Dummy.Fields.Item("May").Value;
		ImpJuniT = Dummy.Fields.Item("Jun").Value;
		ImpJuliT = Dummy.Fields.Item("Jul").Value;
		ImpAgosT = Dummy.Fields.Item("Ago").Value;
		ImpSeptT = Dummy.Fields.Item("Sep").Value;
		ImpOctuT = Dummy.Fields.Item("Oct").Value;
		ImpNoviT = Dummy.Fields.Item("Nov").Value;
		ImpDiciT = Dummy.Fields.Item("Dic").Value;
    }  		
		%>
  <tr align="right" bgcolor="#FFF1BB">
    <td><br /></td>
    <td>&nbsp;</td>
    <td><%=ImpTotaT%></td>
    <td><%=ImpEnerT%></td>
    <td><%=ImpFebrT%></td>
    <td><%=ImpMarzT%></td>
    <td><%=ImpAbriT%></td>
    <td><%=ImpMayoT%></td>
    <td><%=ImpJuniT%></td>
    <td><%=ImpJuliT%></td>
    <td><%=ImpAgosT%></td>
    <td><%=ImpSeptT%></td>
    <td><%=ImpOctuT%></td>
    <td><%=ImpNoviT%></td>
    <td><%=ImpDiciT%></td>
  </tr>
    <%  //Suma total
	EjecInst  = "SELECT convert(char,SUM(PImporte),103) as Tot,SUM(PImporte) AS Tota,"+
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
				"INNER JOIN NCTipoNomina ON PAyuntamiento = CTNAyuntamiento AND "+
										   "PTipoNomina = CTNClave "+
				"Where PAyuntamiento = '"+ClavAyun+"' AND "+
					  "PPartida < 2000 "
	if (BandQuer) Response.Write("Entre: <br>"+EjecInst+"<br>")
	EjecComa.CommandText = EjecInst
	Dummy = EjecComa.Execute() 
	
    ImpTotaT = 0; 
	ImpEnerT = 0; ImpFebrT = 0; ImpMarzT = 0;
	ImpAbriT = 0; ImpMayoT = 0; ImpJuniT = 0;
	ImpJuliT = 0; ImpAgosT = 0; ImpSeptT = 0;
	ImpOctuT = 0; ImpNoviT = 0; ImpDiciT = 0;
    if (!Dummy.EOF)
	 {  ImpTotaT = Dummy.Fields.Item("Tota").Value;
		ImpEnerT = Dummy.Fields.Item("Ene").Value;
		ImpFebrT = Dummy.Fields.Item("Feb").Value;
		ImpMarzT = Dummy.Fields.Item("Mar").Value; 
		ImpAbriT = Dummy.Fields.Item("Abr").Value;
		ImpMayoT = Dummy.Fields.Item("May").Value;
		ImpJuniT = Dummy.Fields.Item("Jun").Value;
		ImpJuliT = Dummy.Fields.Item("Jul").Value;
		ImpAgosT = Dummy.Fields.Item("Ago").Value;
		ImpSeptT = Dummy.Fields.Item("Sep").Value;
		ImpOctuT = Dummy.Fields.Item("Oct").Value;
		ImpNoviT = Dummy.Fields.Item("Nov").Value;
		ImpDiciT = Dummy.Fields.Item("Dic").Value;
    }  		
		%>
  <tr align="right" bgcolor="#CECECE">
    <td><br /></td>
    <td>&nbsp;</td>
    <td><%=ImpTotaT%></td>
    <td><%=ImpEnerT%></td>
    <td><%=ImpFebrT%></td>
    <td><%=ImpMarzT%></td>
    <td><%=ImpAbriT%></td>
    <td><%=ImpMayoT%></td>
    <td><%=ImpJuniT%></td>
    <td><%=ImpJuliT%></td>
    <td><%=ImpAgosT%></td>
    <td><%=ImpSeptT%></td>
    <td><%=ImpOctuT%></td>
    <td><%=ImpNoviT%></td>
    <td><%=ImpDiciT%></td>
  </tr>

<%		
//Cerrar conexion
ConeBase.Close()
%>
</table>
</body>
</html>

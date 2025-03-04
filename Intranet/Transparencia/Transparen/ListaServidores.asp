<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<html>
<head>
    <% EncaHtml = "Lista de Servidores Publicos"; %>
	<!--#include virtual="/Encabezado/EncaLiga.asp" -->
</head>
<body >
<script src="ListaServidores.js"></script>
<!--#include file="ListaServidoresSERP.asp" -->
<form name="DatoBusq" id="DatoBusq" method="post">
  <table class="CritBusq">
    <tr>  
      <th colspan="7" align="center">BUSCAR</th>
    </tr>
    <tr> 
      <td rowspan="4" width="113"><img class="ImgCriBus" src="/Intranet/Encabezados/Img/MEBusca.png" width="113" height="89" border="0" /></td>
      <td width="97" >No. Empleado </td>
      <td width="61" ><input name="ClavServ"  class="TamaCamp2" type="text" size="6" maxlength="6" /></td>
      <td colspan="4">
	  		<select name="UnidMedi" id="UnidMedi" class="TamaCamp3" >
		    <option value="T">TODO EL PERSONAL</option>
			<%while( !CataUnid.EOF ) 
			   { ConsUnid = CataUnid.Fields.Item("CUNConsecutivo").Value
				 ClavUnid = CataUnid.Fields.Item("CUNClaveUnidad").Value
				 DescUnid = CataUnid.Fields.Item("CUNDescriCorta").Value
				 
				 TamaClav = CataUnid.Fields.Item("TamaClav").Value
				 
				 TamaClav = CataUnid.Fields.Item("TamaClav").Value
				 ColoUnid = (TamaClav < 7) ? "#FFE6E6" : "#FFFFFF"

				 //Nivel del organigrama
				 TamaNive = CataUnid.Fields.Item("TamaNive").Value
				 SepaOrga = ( Number(TamaNive) > 0 ) ? "->" : "" 
				 NiveOrga = CataUnid.Fields.Item("CUNNivelOrga").Value
				 
				 Activo = ( String(ConsUnid) == String(BuscUnid) ) ? "selected" : "";  %>		
				 <option value="<%=ConsUnid%>" <%=Activo%> style="background:<%=ColoUnid%>">
				  <%=ClavUnid%>&nbsp;&nbsp;&nbsp;<%=DescUnid%>&nbsp;&nbsp;&nbsp;<%=SepaOrga%><%=NiveOrga%></option>
			   <% 	CataUnid.MoveNext();
					} %>		
      		</select></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
      <td >&nbsp;</td>
      <td colspan="3"><select name="TipoNomi" id="TipoNomi" class="TamaCamp3"  >
        <% while (!CataTiNo.EOF)
			  { ClavTiNo = CataTiNo.Fields.Item("CTNClave").Value
				DescTiNo = CataTiNo.Fields.Item("CTNDescripcion").Value
				EstaBoto = "" 
				if ( String(ClavTiNo) == String(BuscTiNo) ) 
				 EstaBoto = "selected" 
			   %>
        <option value="<%=ClavTiNo%>" <%=EstaBoto%>><%=ClavTiNo%>-<%=DescTiNo%></option>
        <%	CataTiNo.MoveNext(); }  %>
      </select></td>
      <td>
	   <strong style="font-size:16px; color: #2D7572;">
	   QN: <%=QuinTrab%> / <%=EjerTrab%>
       <% if ( String(EsNoTrab) == "C" ) 
	       Response.Write(" Act") ; 
		  else
		   Response.Write("<a id='TextUtil' style='text-decoration:blink'> Cerrada </a>");
	    %>
      </strong></td>
    </tr>
    <tr> 
      <td >NOMBRE</td>
      <td>
	    <input name="nombpaci" class="TamaCamp2" type="text" id="nombpaci" size="10" maxlength="15" placeholder="Digita Nombre" />
	  </td>
	  <td width="90">
	    <input name="apelpate" class="TamaCamp2" type="text" id="apelpate" size="15" maxlength="15"  placeholder="Digita A. Paterno" />
	  </td>
      <td width="98">
	    <input name="apelmate" class="TamaCamp2" type="text" id="apelmate" size="15" maxlength="15" placeholder="Digita A. Materno" />
	  </td>
      <td width="57"><input type="submit" name="Submit" value="Buscar" /></td>
      <td width="162"><strong style="font-size:16px; color: #DF0000;">
        <% if ( QuinTrab != QuiProSi ) 
		       Response.Write("<a id='TextUtil' style='text-decoration:blink'> La Qn trabajo:"+QuiProSi+" </a> ");
           %>
      </strong></td>
    </tr>
    <tr valign="top"> 
      <td>Estado</td>
      <td><input name="EstaServ" type="radio" value="T" <%=EstaTodo%>>Todos</td>
      <td><input type="radio" name="EstaServ" value="O" <%=EstaActi%>>Activos
	      <img src="/Intranet/Encabezados/Img/Boton01.jpg" alt="Servidor Publico Activo" width="20" height="20" border="0"/>
	  </td>
      <td><input type="radio" name="EstaServ" value="L" <%=EstaInac%>>Inactivos
	      <img src="/Intranet/Encabezados/Img/Boton03.jpg" alt="Servidor Publico de Baja" width="20" height="20" border="0"/>
	  </td>
      <td colspan="2">
	    <a id="ActiLiga" href="ListaServidores.asp?Rango=1"><%=RangoActi1%></a> 
		<a id="ActiLiga" href="ListaServidores.asp?Rango=2"><%=RangoActi2%></a> 
		<a id="ActiLiga" href="ListaServidores.asp?Rango=3"><%=RangoActi3%></a> 
		<a id="ActiLiga" href="ListaServidores.asp?Rango=4"><%=RangoActi4%></a> 
		<a id="ActiLiga" href="ListaServidores.asp?Rango=5"><%=RangoActi5%></a> 
		<a id="ActiLiga" href="ListaServidores.asp?Rango=6"><%=RangoActi6%></a></td>
    </tr>
  </table>
</form>

<form name="PideDato" id="PideDato" method="post" action="ListaServidoresCRUD.asp">
<table width="909" class="ListInfo">
  <thead>
	<tr> 
	  <th colspan="10"><span>LISTA DE SERVIDORES P&Uacute;BLICOS</span>
	    <a href="javascript:window.open('FichCurrLista.asp?Param1=X','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0"></a><a href="javascript:window.open('Reporteador/ReporteadorCamp.asp','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0"></a>	  
	    <a href="javascript:window.open('Estadistica/Estadistica.asp?Param1=S','','width=800,height=500,left=50,top=50,resizable=yes,scrollbars=yes');void 0"></a></th>
	  </tr>
  </thead>
  <tr> 
    <th class="Oculta" colspan="2"><a href="ListaServidores.asp?Orden=0">Tn</a></th>
    <th class="Oculta"><a href="ListaServidores.asp?Orden=1">No.</a></th>
    <th class="Oculta" width="74"><a href="ListaServidores.asp?Orden=3">NOMBRE</a></th>
    <th width="223" class="Oculta">Puesto</th>
	<th>Cargo</th>
	<th>FechCargo</th>
    <th>Tel Ofic</th>
	<th>Ext Tel </th>
    <th>Exte Nota </th>
  </tr>
  <% 
     ListaN = "|"  													//Asigna lista en blanco ,cundescripcion,,
	 i=1
	 ConsServ = 0
	 Response.Write("0<br>")
     while ( !ServPub.EOF && i<=150 )
     { ConsServ = ServPub.Fields.Item("sconsecut").Value
	   ClavServ = ServPub.Fields.Item("SNumeroEmpleado").Value
	   ClaSerAn = ServPub.Fields.Item("SNumeroEmpleadoAnt").Value
	   
	   NombServ = ServPub.Fields.Item("nombre").Value
	   UnidAdsc = ServPub.Fields.Item("cundescripcion").Value
	   EstaServ = ServPub.Fields.Item("SStatus").Value
	   TipoNomi = ServPub.Fields.Item("STipoNomina").Value 
	   
	   EdifLabo = ServPub.Fields.Item("TEdificio").Value
	   DescEdif = ServPub.Fields.Item("CEDDescri").Value
	   TipoInte = ServPub.Fields.Item("TTipoInte").Value
	   DescTiIn = ServPub.Fields.Item("CTIDescri").Value   
	   PuesSePu = ServPub.Fields.Item("TPuesto").Value
	   DescPues = ServPub.Fields.Item("CPUDescri").Value

	   CargSePu = ServPub.Fields.Item("TCargo").Value
	   AltaCarg = ServPub.Fields.Item("FAltaCargo").Value
	   TeleOfic = ServPub.Fields.Item("TTelefoOfic").Value
	   ExteOfic = ServPub.Fields.Item("TExtencion").Value
	   NotaSePu = ServPub.Fields.Item("TNota").Value 
	   
	   ListaN += ConsServ + "|"										//Carga los consecutivos a la lista

	   //Boton para estado del Servidor		
	   ImaEstSP = "/Intranet/Encabezados/Img/Boton01.jpg"		//Plaza Ocuapada
	   DesEstSP = "Servidor Activo "
	   if (String(EstaServ) == "P" )							//Plaza con Permiso
	   	{  ImaEstSP = "/Intranet/Encabezados/Img/Boton02.jpg" 
		   DesEstSP = "Servidor con Permiso" }

	   if (String(EstaServ) == "L" )							//Plaza libre
	   	{  ImaEstSP = "/Intranet/Encabezados/Img/Boton03.jpg" 
		   DesEstSP = "Servidor de Baja" }

	   //Boton para el tipo de nomina	   
	   ImaTipNom = "/Intranet/Adminis/Imagen/Nomina"+TipoNomi+".gif"
	   DesTipNom = "";
	   switch ( String(TipoNomi))
	    { case "00": DesTipNom = "Dietas";			 break;
		  case "01": DesTipNom = "Sindicalizado";	 break;
		  case "02": DesTipNom = "General";			 break;
		  case "03": DesTipNom = "Mandos Medios";	 break;
		  case "04": DesTipNom = "Seguridad Publica"; break;
			} 
	   %>
	  <tr > 
		<td width="20" data-label="Edo:">
		<img src="<%=ImaEstSP%>" title="<%=DesEstSP%>" width="20" height="20" border="0" /></td>
		<td width="20" data-label="Nómina:"><img src="<%=ImaTipNom%>" alt="<%=DesTipNom%>" width="20" height="20" border="0" /></td>
		<td width="24" data-label="Clave: "><%=ClavServ%></td>
		<td width="74" data-label="Nombre:">
		   <%=NombServ%> <br>
		</td>
		<td>
		  <input name="C02<%=ConsServ%>" type="hidden" value="<%=EdifLabo%>" size="5"/>
		  <input name="D02<%=ConsServ%>" class="TamaCamp2" type="text" size="30" maxlength="50" value="<%=DescEdif%>"/>
		  <a href="javascript:window.open('CataEdif.asp?Param1=<%=ConsServ%>&Param2=<%=EdifLabo%>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
		  <img src="/Intranet/Adminis/Imagen/SIMGA02.jpg" title="Edificio" width="15" height="15" border="0" /></a><br>
		  
		  <input name="C03<%=ConsServ%>" type="hidden" value="<%=TipoInte%>" size="5"/>
		  <input name="D03<%=ConsServ%>" class="TamaCamp2" type="text" size="30" maxlength="50" value="<%=DescTiIn%>"/>
		  <a href="javascript:window.open('CataTipoInte.asp?Param1=<%=ConsServ%>&Param2=<%=EdifLabo%>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
		  <img src="/Intranet/Adminis/Imagen/ServPubPu.jpg" title="Clasificación" width="15" height="15" border="0" /></a>
		  <br>
		  
		  <input name="C04<%=ConsServ%>" type="hidden" value="<%=PuesSePu%>" size="5"/>
		  <input name="D04<%=ConsServ%>" class="TamaCamp2" type="text" size="30" maxlength="50" value="<%=DescPues%>"/>
		  <a href="javascript:window.open('CataPuesto.asp?Param1=<%=ConsServ%>&Param2=<%=PuesSePu%>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
		  <img src="/Intranet/Adminis/Imagen/SeleSePu.jpg" title="Clasificación" width="15" height="15" border="0" /></a>
		  <br>
		</td>
	    <td width="90" data-label="Cargo:">
	    <input name="C05<%=ConsServ%>" class="TamaCamp2" type="text" size="15" maxlength="15" placeholder="Digitar el cargo " value="<%=CargSePu%>" /></td>
	    <td width="144" data-label="Fecha Cargo:">
	    <input name="C06<%=ConsServ%>" class="TamaCamp2" type="date" placeholder="DD/MM/YYYY" value="<%=TeleOfic%>" /></td>
	    <td width="90" data-label="Tel. Oficina:">
	    <input name="C07<%=ConsServ%>" class="TamaCamp2" type="text" size="15" maxlength="15" placeholder="Digita Tel Oficina" value="<%=TeleOfic%>" /></td>
        <td width="90" data-label="Extencion Tel.:">
	    <input name="C08<%=ConsServ%>" class="TamaCamp2" type="text" size="15" maxlength="15" placeholder="Digita Ext. Oficina" value="<%=ExteOfic%>" /></td>
        <td width="90" data-label="Nota.:">
	    <input name="C09<%=ConsServ%>" class="TamaCamp2" type="text" size="15" maxlength="15" placeholder="Digita Nota" value="<%=NotaSePu%>" /></td>
		  
	  </tr>
  <%    ServPub.MoveNext();
		i++
      }%>
	<tr> 
	  <td colspan="10"><input type="submit" name="Submit2" value="Actualizar" /></td>
	</tr>
</table>
</form>
<% 
 //Carga la lista de empleados
 ListaN += ConsServ + "|"
 Response.Cookies("AListaN")= ListaN
 
 ConeBase.Close() 
 
 Response.Write("<script> document.PideDato.ClavServ.focus(); document.PideDato.ClavServ.select();  </script>")
 
} 
%>
		
</body>
</html>
<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<html>
<head>
  <% EncaHtml = "Catalogo de Entidad Federativa"; %>
  <!--#include virtual="/Encabezado/EncaLiga.asp" -->
</head>
<body>
<!--#include file="EncaSePuCa.asp" -->
<script language="javascript">
function PasaCata(ConsSePu, ClavCata, DescCata)
{ InstReal = "opener.top.PideDato.C03"+ConsSePu+".value= '"+ClavCata+"' "
  eval(InstReal)
  InstReal = "opener.top.PideDato.D03"+ConsSePu+".value= '"+DescCata+"' "
  eval(InstReal)
  window.close();
}
</script>
<%
ABusqCat = new Array();
ABusqCat =  String(Request.Cookies("CBusqCat")).split("|")
ConsTrab = ABusqCat[0]
ClavBusq = ABusqCat[1]

if (Request.Form+"." != "undefined.")
 {  //Cerrar Base
    ConeBase.Close() 

    CampBusq = Request.Form("CampBusq")
	Response.Redirect("CataEdif.asp?ParamB="+CampBusq) 
 }			  
else
 { BandQuer = false
   if (String(Request.QueryString("Param0")) != "undefined" && 
       String(Request.QueryString("Param0")) != "") 	
	   BandQuer = true	 

   if (String(Request.QueryString("Param1")) != "undefined" && 
       String(Request.QueryString("Param1")) != "") 
	   { ConsTrab = Request.QueryString("Param1")
	     ClavBusq = Request.QueryString("Param2")
	     Response.Cookies("CBusqCat") = ConsTrab +"|"+ ClavBusq +"|" } 
	   

   CondBusq = ""
   if (String(Request.QueryString("ParamB")) != "undefined" && 
       String(Request.QueryString("ParamB")) != "") 
	   { CampBusq = Request.QueryString("ParamB")
	     CondBusq   += "AND  CTIDescri like '%"+CampBusq+"%' "  }

    //Datos del Servidor Publico , , 
	EjecInst  = "SELECT CTIClave AS Clave , CTIDescri AS Descri "+
				"FROM   TCTipoIntegra "+
				"WHERE  CTIAyuntamiento = '"+ClavAyun+"' "+
						CondBusq +" "
				"ORDER BY CTIClave "
	if (BandQuer) Response.Write("3)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	CataCons = EjecComa.Execute()
%>
<form name="PideDato" id="PideDato" method="post" action="">
  <table width="440" align="center" class="CritBusq">
    <tr> 
      <td width="19"><img src="/Intranet/Encabezados/Img/MEEsqSupIzq.jpg" width="18" height="19" border=0 ></td>
      <td width="57">&nbsp;</td>
      <td colspan="2"></td>
      <td><img src="/Intranet/Encabezados/Img/MEEsqSupDer.jpg" width="18" height="20" ></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>Entidad</td> 
      <td width="146"><input name="CampBusq" type="text" size="20"></td>
      <td width="154"><input type="submit" name="Submit" value="Buscar" title="Buscar" /></td>
      <td width="18">&nbsp;</td>
    </tr>
  </table>
</form>
<table width="440" align="center" class="ListInfo">
  <thead>
  </thead>
  <tr> 
    <th width="81">Clave</th>
    <th width="311">Tipo de Integrante </th>
    <th>&nbsp;</th>
  </tr>
  <% //Seleccionada
     while ( !CataCons.EOF  )
     { ClavCata = CataCons.Fields.Item("Clave").Value
	   DescCata = CataCons.Fields.Item("Descri").Value 
	   
	   if ( ClavCata == ClavBusq ){ %>
	  <tr  onMouseOver="this.style.background='#A3A3A3';" onMouseOut="this.style.background = '';"> 
		<td>
		<%=ClavCata%></td>
		<td><%=DescCata%> </td>
		<td width="20">
		  <a href="#" onClick="PasaCata('<%=ConsTrab%>','<%=ClavCata%>','<%=DescCata%>')">
		  <img src="/Intranet/Adminis/Imagen/WhatA.gif" title="Seleccionar entidad" width="20" height="20" border="0" /></a></td>
      </tr>
  <%   break; //rompe el ciclo
      }
     CataCons.MoveNext();
     } 
	CataCons.MoveFirst(); 
	//NO Seleccionada
    while ( !CataCons.EOF  )
     { ClavCata = CataCons.Fields.Item("Clave").Value
	   DescCata = CataCons.Fields.Item("Descri").Value 
	   
	   if ( ClavCata != ClavBusq ) { %>
	  <tr  onMouseOver="this.style.background='#A3A3A3';" onMouseOut="this.style.background = '';"> 
		<td>
		<%=ClavCata%></td>
		<td><%=DescCata%> </td>
		<td width="20">
		  <a href="#" onClick="PasaCata('<%=ConsTrab%>','<%=ClavCata%>','<%=DescCata%>')">
		  <img src="/Intranet/Adminis/Imagen/WhatI.gif" title="Seleccionar entidad" width="20" height="20" border="0" /></a></td>
      </tr>
  <%  }
     CataCons.MoveNext();
     } %>

</table>
<% 
 ConeBase.Close() 
 Response.Write("<script> document.PideDato.CampBusq.focus();   </script>") 
}
%>
</body>
</html>
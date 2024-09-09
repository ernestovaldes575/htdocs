<!--#include file="EncaSePu.asp" -->
<%

ABusqMae = new Array();
ABusqMae =  String(Request.Cookies("CBusqMae")).split("|")
Response.Write(ABusqMae)
BuscUnid = ABusqMae[0] 
EstaServ = ABusqMae[1] 
RangList = ABusqMae[2]
OrdeList = ABusqMae[3]
BuscTiNo = ABusqMae[4]

//Borra Cokies
Response.Cookies("CBusqCat").Expires  = "01/01/2020"
Response.Cookies("CTipoJust").Expires  = "01/01/2020"
Response.Cookies("AListaN").Expires  = "01/01/2020"

BandQuer = false
if (String(Request.QueryString("Param0")) != "undefined" && 
    String(Request.QueryString("Param0")) != "") 
  BandQuer = true 

if (Request.Form+"." != "undefined.")
{ //Cargando informacion
  ClavServ = Request.Form("ClavServ");
  NombPaci = Request.Form("NombPaci");
  ApelPate = Request.Form("ApelPate");
  ApelMate = Request.Form("ApelMate");
  UnidMedi = Request.Form("UnidMedi"); 
  EstaServ = Request.Form("EstaServ"); 
  TipoNomi = Request.Form("TipoNomi"); 
  
  Pagina = "ListaServidores.asp?ClavServ="+ClavServ+"&NombPaci="+NombPaci+"&ApelPate="+ApelPate+"&ApelMate="+ApelMate+"&UnidMedi="+UnidMedi+"&EstaServ="+EstaServ+"&TipoNomi="+TipoNomi
  //Response.Write("Pagina"+Pagina)
  Response.Redirect(Pagina);
}
else
{ //Define el primer parametro 	 
  if (String(Request.QueryString("Param1")) != "undefined" && 
      String(Request.QueryString("Param1")) != "") 
	{ BuscUnid = "T" 
	  EstaServ = "O" 	//T.- Todos O.-Ocupados  L.-Libres
	  RangList = "1"
	  OrdeList = "1"
	  BuscTiNo = "T" 
	  Response.Cookies("CBusqMae") = BuscUnid + "|" + EstaServ + "|"  + RangList + "|" + OrdeList + "|" + BuscTiNo + "|"
	  }

  //carga la informacion
  Condicio = ""   
  Orden	   = " ORDER BY  SApellidoPaterno, SApellidoMaterno, SNombre "
  if (String(Request.QueryString("ClavServ")) != "undefined" && 
    String(Request.QueryString("ClavServ")) != "") { 
	ParaReci = Request.QueryString("ClavServ")
    Condicio = " AND SNumeroEmpleado like  '%"+ ParaReci+ "%' "  }

  //Nombre
  if (String(Request.QueryString("NombPaci")) != "undefined" && 
    String(Request.QueryString("NombPaci")) != "") { 
	ParaReci  = Request.QueryString("NombPaci")
    Condicio += " AND snombre like upper('%"+ParaReci+"%') "    }

  //Apellido paterno
  if (String(Request.QueryString("ApelPate")) != "undefined" && 
    String(Request.QueryString("ApelPate")) != "") { 
	ParaReci=Request.QueryString("ApelPate")
    Condicio += " AND SApellidoPaterno like upper('%"+ParaReci+"%') "  }


  //Apellido paterno
  if (String(Request.QueryString("ApelMate")) != "undefined" && 
      String(Request.QueryString("ApelMate")) != "") { 
  	  ParaReci=Request.QueryString("ApelMate")
      Condicio += " AND SApellidoMaterno like upper('%"+ParaReci+"%') " }

  //Unidad Médica
  if (String(Request.QueryString("UnidMedi")) != "undefined" && 
      String(Request.QueryString("UnidMedi")) != "")
	 { BuscUnid = Request.QueryString("UnidMedi")
	   if ( String(BuscUnid) == "-1" )
	    { EstaServ = "T";
		  RangList = "1";  }
	      Response.Cookies("CBusqMae") = BuscUnid + "|" + EstaServ + "|"  + RangList + "|" + OrdeList + "|" + BuscTiNo + "|" }
   
  //Tipo Nomina
  if (String(Request.QueryString("TipoNomi")) != "undefined" && 
      String(Request.QueryString("TipoNomi")) != "")
	 { BuscTiNo = Request.QueryString("TipoNomi")
	   Response.Cookies("CBusqMae") = BuscUnid + "|" + EstaServ + "|"  + RangList + "|" + OrdeList + "|" + BuscTiNo + "|" }
  
  //Esatdo del Servidor
  if (String(Request.QueryString("EstaServ")) != "undefined" && 
      String(Request.QueryString("EstaServ")) != "") 
	 { EstaServ=Request.QueryString("EstaServ")
	   Response.Cookies("CBusqMae") = BuscUnid + "|" + EstaServ + "|"  + RangList + "|" + OrdeList + "|" + BuscTiNo + "|" }

   //Cambiar rangos
   if (String(Request.QueryString("Rango")) != "undefined" && 
       String(Request.QueryString("Rango")) != "") 
	{ RangList=Request.QueryString("Rango")
	  Response.Cookies("CBusqMae") = BuscUnid + "|" + EstaServ + "|"  + RangList + "|" + OrdeList + "|" + BuscTiNo + "|"}

  //Cambiar rangos
  if (String(Request.QueryString("Orden")) != "undefined" && 
        String(Request.QueryString("Orden")) != "") 
	  { OrdeList=Request.QueryString("Orden")
	    Response.Cookies("CBusqMae") = BuscUnid + "|" + EstaServ + "|"  + RangList + "|" + OrdeList + "|" + BuscTiNo + "|"}

  if (String(BuscUnid) != 'T' )			 //Todas las unidades
	Condicio +=" AND sunidad = "+BuscUnid+" "

  if (String(EstaServ) != 'T' )			 //Todas las unidades
	Condicio +=" AND SStatus='"+EstaServ+"'  " 

  //Tipo de nomina
  NomiT = ""; Nomi0 = ""; Nomi1 = "";Nomi2 = "";
  Nomi3 = ""; Nomi4 = ""; Nomi5 = "";Nomi6 = "";Nomi7 = "";

  if ( String (BuscTiNo) != "T" )
	Condicio +=" AND STipoNomina = "+BuscTiNo+" "
	  	
  EstaTodo=""; EstaActi = ""; EstaInac=""; 	   
  switch( String(EstaServ))  	   
    { case "T": EstaTodo="checked"; break; 
	  case "O": EstaActi="checked"; break; 
	  case "L": EstaInac="checked"; break; 
	 }
	 
   //---------------------------------------------------------------------------------------
   //Carga el catalogo de Unidad Administrativa
   EjecInst  = "SELECT CUNConsecutivo, CUNClaveUnidad, "+
					   "{ fn LENGTH(CUNClaveUnidad) } AS TamaClav,"+
					   "CUNDescripcion, CUNDescriCorta, "+
					   "{ fn LENGTH(CUNNivelOrga) } AS TamaNive, CUNNivelOrga  "+
				"FROM   Acceso.dbo.ACUnidades "+
				"WHERE CUNAyuntamiento  = '"+ClavAyun+"' AND "+
					  "CUNEstado = 'A' "+
				"ORDER BY CUNClaveUnidad "
	if (BandQuer) Response.Write("1)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	CataUnid = EjecComa.Execute()

	//Catalo del Tipo de Nomina 
	EjecInst  = "SELECT 'T' AS CTNClave, 'Todos' AS CTNDescripcion "+
				"UNION "+
				"SELECT CTNClave, CTNDescripcion "+
				"FROM   "+BasAdmEj+"NCTipoNomina "+
				"WHERE  CTNAyuntamiento = '"+ClavAyun+"' AND CTNEstado = 'A' "+
				"ORDER BY CTNClave "
	if (BandQuer) Response.Write("2)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	CataTiNo = EjecComa.Execute()
	
	EjecInst  = "SELECT CTIClave AS Clave , CTIDescri AS Descri "+
				"FROM  TCTipoIntegra "+
				"WHERE  CTIAyuntamiento = '"+ClavAyun+"' "+
				"ORDER BY CONVERT(int, CTIClave) "
	if (BandQuer) Response.Write("4)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	CataTiIn = EjecComa.Execute()
	
	EjecInst  = "SELECT CPUClave AS Clave , CPUDescri AS Descri "+
				"FROM  TCPuesto "+
				"WHERE  CPUAyuntamiento = '"+ClavAyun+"' "+
				"ORDER BY CPUDescri "
	if (BandQuer) Response.Write("5)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	CataPues = EjecComa.Execute()
  
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
	if (BandQuer) Response.Write("6)<br>"+EjecInst+"<br><br>")
	EjecComa.CommandText = EjecInst
	ServPub = EjecComa.Execute()

	RangoActi1=" 1 "; RangoActi2=" 2 "; RangoActi3=" 3 ";RangoActi4=" 4 "; 
	RangoActi5=" 5 "; RangoActi6=" 6 "; RangoActi7=" 7 ";RangoActi8=" 8 "; 
	switch ( Number(RangList) )
	 { case 1: RangoActi1=" < 1 > "; break;
	   case 2: RangoActi2=" < 2 > "; break;
	   case 3: RangoActi3=" < 3 > "; break;
	   case 4: RangoActi4=" < 4 > "; break;
	   case 5: RangoActi5=" < 5 > "; break;
	   case 6: RangoActi6=" < 6 > "; break;
	   case 7: RangoActi6=" < 7 > "; break;
	   case 8: RangoActi6=" < 8 > "; break;
	   
	  }
	 
	if ( Number(RangList) > 1)
	 {  RInic = 1
	    RFin = (150 *(Number(RangList)-1)) 
	    //RFin  = 150 + (150 *Number(RangList)) 
		//Response.Write( "RInic "+RInic+" RFin"+RFin+"<br>")
		while ( !ServPub.EOF && RInic <=  RFin  )
		 { ServPub.MoveNext(); 
		   RInic ++;
		 }
	 } 
	//Response.Write("Sale EjecInst= <br>"+EjecInst+"<br>")
	
%>

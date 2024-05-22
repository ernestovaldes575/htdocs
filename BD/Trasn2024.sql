USE [Transparencia]
GO
/****** Object:  Table [dbo].[TTArt7_vii]    Script Date: 22/05/2024 15:09:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[TTArt7_vii](
	[AAyuntamiento] [char](3) NULL,
	[AEjercicio] [int] NULL,
	[AFechaInicio] [smalldatetime] NULL,
	[AFechaTermino] [smalldatetime] NULL,
	[AClavePuesto] [nvarchar](50) NULL,
	[ADenominacion] [nvarchar](50) NULL,
	[ANombreSP] [nvarchar](50) NULL,
	[APrimerApellidoSP] [nvarchar](50) NULL,
	[ASegundoApellidoSP] [nvarchar](50) NULL,
	[AAreaAdscripcion] [int] NULL,
	[AFechaAltaPuesto] [smalldatetime] NULL,
	[ATipoVialidad] [int] NULL,
	[ATipoVialidadOtro] [nvarchar](50) NULL,
	[ANombreVialidad] [nvarchar](50) NULL,
	[ANumeroExterior] [int] NULL,
	[ANumeroInterior] [int] NULL,
	[ATipoAsentamiento] [int] NULL,
	[ATipoAsentamientoOtro] [nvarchar](50) NULL,
	[ANombreAsentamiento] [nvarchar](50) NULL,
	[AClaveEntidad] [int] NULL,
	[AClaveMunicipio] [int] NULL,
	[AClaveLocalidad] [int] NULL,
	[ACodigoPostal] [int] NULL,
	[ATelefonoOficial] [int] NULL,
	[AExtension] [int] NULL,
	[ACorreoElectronico] [nvarchar](50) NULL,
	[AAreaResp] [int] NULL,
	[ANota] [nvarchar](50) NULL
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Ejercicio' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AEjercicio'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Fecha de inicio del periodo que se informa ( formato: "dd/mm/aaaa" ) ' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AFechaInicio'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Fecha de término del periodo que se informa ( formato: "dd/mm/aaaa" ) ' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AFechaTermino'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Clave o nivel del puesto' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AClavePuesto'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Denominación del cargo o nombramiento otorgado' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ADenominacion'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Nombre del servidor(a) público(a)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ANombreSP'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Primer apellido del servidor(a) público(a)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'APrimerApellidoSP'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Segundo apellido del servidor(a) público(a)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ASegundoApellidoSP'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Área de adscripción' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AAreaAdscripcion'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Fecha de alta en el cargo ( formato: "dd/mm/aaaa" ) ' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AFechaAltaPuesto'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Tipo de vialidad' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ATipoVialidad'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'atención: Domicilio oficial: Tipo de vialidad en caso de elegir OTRO llenar este campo' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ATipoVialidadOtro'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Nombre de vialidad' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ANombreVialidad'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Número Exterior' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ANumeroExterior'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Número interior' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ANumeroInterior'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Tipo de asentamiento' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ATipoAsentamiento'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'atención: Domicilio oficial: Tipo de asentamiento en caso de elegir OTRO llenar este campo' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ATipoAsentamientoOtro'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Nombre del asentamiento' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ANombreAsentamiento'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Clave de la entidad federativa:  (Buscar ID en el sistema)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AClaveEntidad'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Clave del municipio o delegación:  (Buscar ID en el sistema)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AClaveMunicipio'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Clave de la localidad:  (Buscar ID en el sistema)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AClaveLocalidad'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Domicilio oficial: Código postal' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ACodigoPostal'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Número(s) de teléfono oficial' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ATelefonoOficial'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Extensión' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AExtension'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Correo electrónico oficial' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ACorreoElectronico'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Área responsable de la información' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'AAreaResp'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Nota' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'TTArt7_vii', @level2type=N'COLUMN',@level2name=N'ANota'
GO

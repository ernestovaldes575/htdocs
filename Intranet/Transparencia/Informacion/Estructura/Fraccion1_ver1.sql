USE TRANSPARENCIA
CREATE TABLE dbo.TTArt92_I(
	AAyuntamiento char(3) NULL,
	AEjercicio int NULL,
	AFechaInicio smalldatetime NULL,
	AFechaTermino smalldatetime NULL,
	ATipoNorma int NULL,
	ATipoNormaOtro nvarchar(50) NULL,
	ADenominacion nvarchar(50) NULL,
	AFechaDOF smalldatetime NULL,
	AFechaUltima smalldatetime NULL,
	AHipervinculo nvarchar(50) NULL,
	AAreaResp int NULL,
	ANota nvarchar(50) NULL
) ON PRIMARY

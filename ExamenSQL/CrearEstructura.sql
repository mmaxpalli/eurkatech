-- -------------------------------------------------------------
/****** PRUEBA DE APTITUD EUREKATECH ******/
-- ING. Max Ronald Palli Uscamaita
-- Fecha: 21/08/2019
-- Nota: Se esta utilizando nomeclatura y estructura SQL SERVER standard ya que no se especifico alguna en especial. (SQL naming conventions)
-- -------------------------------------------------------------



/****** ELIMINAR / CREAR BASE DE DATOS ******/
IF EXISTS(SELECT  * FROM  sys.sysdatabases WHERE NAME ='EurekaTech')
    BEGIN
		USE master
		ALTER DATABASE EurekaTech
		SET  SINGLE_USER WITH ROLLBACK IMMEDIATE;
		DROP DATABASE EurekaTech;
    END
GO
CREATE DATABASE EurekaTech
GO

USE EurekaTech
GO

/****** CREAR TABLA USUARIOS ******/
IF OBJECT_ID('dbo.USUARIOS', 'U') IS NOT NULL 
  DROP TABLE dbo.USUARIOS; 
CREATE TABLE [dbo].[USUARIOS](
	[CodigoUsuario] [int] NOT NULL,
	[Usuario] [varchar](50) NULL,
	[Clave] [varchar](50) NULL,
	[Edad] [int] NULL,
 CONSTRAINT [PK_USUARIOS] PRIMARY KEY CLUSTERED 
([CodigoUsuario] ASC)
) ON [PRIMARY]
GO

/****** CREAR TABLA FAVORITOS ******/
IF OBJECT_ID('dbo.FAVORITOS', 'U') IS NOT NULL 
  DROP TABLE dbo.FAVORITOS; 
CREATE TABLE [dbo].[FAVORITOS](
	[CodigoUsuario] [int] NOT NULL,
	[CodigoUsuarioFavorito] [int] NOT NULL,
 CONSTRAINT [PK_FAVORITOS] PRIMARY KEY CLUSTERED 
([CodigoUsuario] ASC,[CodigoUsuarioFavorito] ASC)
)ON [PRIMARY]
GO

/****** CREAR TABLA USUARIOPAGO ******/
IF OBJECT_ID('dbo.USUARIOSPAGOS', 'U') IS NOT NULL 
  DROP TABLE dbo.USUARIOSPAGOS; 
CREATE TABLE [dbo].[USUARIOSPAGOS](
	[CodigoPago] [int] NOT NULL,
	[CodigoUsuario] [int] NULL,
 CONSTRAINT [PK_USUARIOSPAGOS] PRIMARY KEY CLUSTERED 
([CodigoPago] ASC)
) ON [PRIMARY]
GO

/****** CREAR TABLA PAGOS ******/
IF OBJECT_ID('dbo.PAGOS', 'U') IS NOT NULL 
  DROP TABLE dbo.PAGOS; 
CREATE TABLE [dbo].[PAGOS](
	[CodigoPago] [int] NOT NULL,
	[Importe] [decimal](18, 2) NULL,
	[Fecha] [date] NULL,
 CONSTRAINT [PK_PAGOS] PRIMARY KEY CLUSTERED 
([CodigoPago] ASC)
) ON [PRIMARY]
GO


/****** AGREGAR FK ENTRE FAVORITOS Y USUARIOS ******/
ALTER TABLE [dbo].[FAVORITOS]  WITH CHECK ADD  CONSTRAINT [FK_FAVORITOS_USUARIOS] FOREIGN KEY([CodigoUsuario])
REFERENCES [dbo].[USUARIOS] ([CodigoUsuario])
GO
ALTER TABLE [dbo].[FAVORITOS] CHECK CONSTRAINT [FK_FAVORITOS_USUARIOS]
GO
/****** AGREGAR FK ENTRE FAVORITOS Y USUARIOS ******/
ALTER TABLE [dbo].[FAVORITOS]  WITH CHECK ADD  CONSTRAINT [FK_FAVORITOS_USUARIOS1] FOREIGN KEY([CodigoUsuarioFavorito])
REFERENCES [dbo].[USUARIOS] ([CodigoUsuario])
GO
ALTER TABLE [dbo].[FAVORITOS] CHECK CONSTRAINT [FK_FAVORITOS_USUARIOS1]
GO
/****** AGREGAR FK ENTRE PAGOS Y USUARIOSPAGOS ******/
ALTER TABLE [dbo].[PAGOS]  WITH CHECK ADD  CONSTRAINT [FK_PAGOS_USUARIOPAGOS] FOREIGN KEY([CodigoPago])
REFERENCES [dbo].[USUARIOSPAGOS] ([CodigoPago])
GO
ALTER TABLE [dbo].[PAGOS] CHECK CONSTRAINT [FK_PAGOS_USUARIOPAGOS]
GO

-- -------------------------------------------------------------
/****** VOLCADO DE DATOS CARGA INCIAL DE DATOS DE PRUEBA ******/
-- -------------------------------------------------------------

/****** DATA USUARIOS ******/
INSERT INTO USUARIOS VALUES (1,'Max',CONVERT(VARCHAR(32), HashBytes('MD5', 'max'), 2),27)
INSERT INTO USUARIOS VALUES (2,'Ronald',CONVERT(VARCHAR(32), HashBytes('MD5', 'ronald'), 2),18)
INSERT INTO USUARIOS VALUES (3,'Pepito',CONVERT(VARCHAR(32), HashBytes('MD5', 'pepito'), 2),20)
INSERT INTO USUARIOS VALUES (4,'Maria',CONVERT(VARCHAR(32), HashBytes('MD5', 'maria'), 2),17)
INSERT INTO USUARIOS VALUES (5,'Paola',CONVERT(VARCHAR(32), HashBytes('MD5', 'paola'), 2),18)

/****** DATA FAVORITOS ******/
INSERT INTO FAVORITOS VALUES (1,2)
INSERT INTO FAVORITOS VALUES (1,3)
INSERT INTO FAVORITOS VALUES (1,4)
INSERT INTO FAVORITOS VALUES (4,1)
INSERT INTO FAVORITOS VALUES (4,2)
INSERT INTO FAVORITOS VALUES (5,4)

/****** DATA USUARIOSPAGOS ******/
INSERT INTO USUARIOSPAGOS VALUES (1,1)
INSERT INTO USUARIOSPAGOS VALUES (2,1)
INSERT INTO USUARIOSPAGOS VALUES (3,2)
INSERT INTO USUARIOSPAGOS VALUES (4,3)
INSERT INTO USUARIOSPAGOS VALUES (5,4)

/****** DATA PAGOS ******/
INSERT INTO  PAGOS VALUES (1,10.00,'20190821')
INSERT INTO  PAGOS VALUES (2,15.00,'20190821')
INSERT INTO  PAGOS VALUES (3,20.00,'20190821')
INSERT INTO  PAGOS VALUES (4,25.00,'20190821')
INSERT INTO  PAGOS VALUES (5,30.00,'20190821')
GO

-- -------------------------------------------------------------
/****** SELECCIONAR CONTENIDO DE TABLAS (opcional) ******/
-- -------------------------------------------------------------
SELECT * FROM USUARIOS
GO
SELECT * FROM FAVORITOS
GO
SELECT * FROM USUARIOSPAGOS
GO
SELECT * FROM PAGOS
GO

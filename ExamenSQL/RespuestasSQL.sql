-- -------------------------------------------------------------
/****** PRUEBA DE APTITUD EUREKATECH ******/
-- ING. Max Ronald Palli Uscamaita
-- Fecha: 21/08/2019
-- Nota: Se esta utilizando nomeclatura y estructura SQL SERVER standard ya que no se especifico alguna en especial. (SQL naming conventions)
-- ---------------------------------------------------------------------------------------------------------------------------------------------

/* PREGUNTA A
Encuentre el error en la siguiente consulta, si la intenci�n era devolver todos los nombres de
usuario (campo "usuario") y clave de los usuarios que tengan 18 a�os, ordenados
alfab�ticamente por el nombre de usuario 
*/

SELECT 
	USUARIO, 
	CLAVE 
FROM 
	USUARIOS 
WHERE 
	EDAD = 18
ORDER BY 
	USUARIO ASC

/* PREGUNTA B
Encuentre el error en la consulta, que deber�a devolver todos los usuarios con sus favoritos,
�nicamente mostrando nombres de usuario: en la primera columna que se muestre el
nombre de usuario del due�o del favorito, y en la segunda que aparezca el nombre de
usuario del favorito. Si le parece necesario, reescribir la consulta
*/

SELECT
U.Usuario AS 'Usuario', 
R.Usuario AS 'Su Favorito'
FROM FAVORITOS  F
INNER JOIN USUARIOS U ON F.CodigoUsuario = U.CodigoUsuario
INNER JOIN USUARIOS R ON F.CodigoUsuarioFavorito = R.CodigoUsuario


/* PREGUNTA C
Indique qu� �ndices (sean clave primaria o no) deber�a tener cada tabla, y por qu�.
*/
 
-- Tabla USUARIOS : CodigoUsuario
-- Tabla FAVORITOS : CodigoUsuario, CodigoUsuarioFavorito
-- Tabla USUARIOSPAGOS : CodigoPago
-- Tabla PAGOS : CodigPago
-- Los indices deben utilizarse porque nos ayudan entre otras cosas acelerar el tiempo de respuesta , optimizar los recursos de Hardware y tambien es una BUENA PRACTICA recomendada.
EXEC sp_helpindex '[dbo].[USUARIOS]'
EXEC sp_helpindex '[dbo].[FAVORITOS]'
EXEC sp_helpindex '[dbo].[USUARIOSPAGOS]'
EXEC sp_helpindex '[dbo].[PAGOS]'


/* PREGUNTA D
�Existe algo de la estructura de la base de datos que cree se deber�a modificar? �Por qu�?
*/

-- Utilizar alguna nomeclatura para nombrar los CAMPOS de las tablas Tipo CamelCase , PSR de SQL o alguna otra.    
-- Utilizar campos para auditar los registros algo como TIMESTAMP


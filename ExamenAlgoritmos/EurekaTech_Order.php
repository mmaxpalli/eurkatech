

<?php

/* 
 |-<  PRUEBA DE APTITUD EUREKATECH  >-|
-- ING. Max Ronald Palli Uscamaita
-- Fecha: 21/08/2019
-- Ordenamiento Arrays.
*/


/* Declaracion de Array asociativo */
$array = array(
    0 => array(
        'nombre' => 'Juan',
        'apellido' => 'Perez',
        'edad' => '26'
    ),
    1 => array(
        'nombre' => 'Carlos',
        'apellido' => 'Gomez',
        'edad' => '30'
    ),
    2 => array(
        'nombre' => 'Ernesto',
        'apellido' => 'Ramirez',
        'edad' => '22'
    ),
);

echo "Array ORIGINAL";
print "<pre>";
print_r($array);
print "</pre>";


orderArray($array,'edad');


/* Funcion para ORDENAR ARRAY , se respeta la funcion para no realizar muchos cambios */
function orderArray($array, $dimension){

	$length = count($array)-1;
		for ($outer = 0; $outer < $length; $outer++) {
			for ($inner = 0; $inner < $length; $inner++){
				if ($array[$outer] < $array[$inner]) {
					$tmp = $array[$outer];
					$array[$outer] = $array[$inner];
					$array[$inner] = $tmp;
					
					}
				} 


			} 
echo "Array ORDENADO DE MENOR A MAYOR";
print "<pre>";
print_r(array_reverse($array));
print "</pre>";
}


/* Funcion para ORDENAR ARRAY */
function cmp($a, $b)
{
    return $b['edad'] - $a['edad'];
}

usort($array, "cmp");
echo "Array Ordenado de Mayor a Menor usando USORT";
print "<pre>";
print_r($array);
print "</pre>";

?>
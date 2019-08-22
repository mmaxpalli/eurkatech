<?php 

/* 
 |-<  PRUEBA DE APTITUD EUREKATECH  >-|
-- ING. Max Ronald Palli Uscamaita
-- Fecha: 21/08/2019
-- Recrusividad.
*/

echo "FUNCION ORIGINAL";
$main = ".";
readDirs($main);


/* Funcion Original */
function readDirs($main){
	$dirHandle = opendir($main);
		while($file = readdir($dirHandle)) {
			if(is_dir($main . $file) && $file != '.' && $file != '..') {
				$vec = readDirs($file);				
			} else {
			$vec[] = $main.$file;
			echo "<pre>";
			}
		}
		print_r($vec);
}


/* Funcion recursivo de PHP */
echo "FUNCION RecursiveDirectoryIterator";
function PrintArbolProyecto($i)
{
    echo '<ul>';
    foreach ($i as $path) {
        if ($path->isDir())
        {
            PrintArbolProyecto($path);
            echo '</li>';
        }
        else
        {
            echo '<li>'.$path.'</li>';
        }
    }
    echo '</ul>';
}

$dir = '.';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
PrintArbolProyecto($iterator);


/* Funcion cerrando directorios */
echo "FUNCION OpederDirCloseDir";
getFileList(".");
 function getFileList($dirpath)
    {
        $filelist = array();
        if ($handle = opendir(dirname ($dirpath))) 
        {
           while (false !== ($file = readdir($handle)))
              {
                    $filelist[] = $file;
              }
            closedir($handle);
        }
        echo "<pre>";
        print_r($filelist);
    }


?>




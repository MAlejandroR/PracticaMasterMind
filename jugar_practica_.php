<?php
//Fichero dónde se implementan las funciones
require_once("funciones.php");
session_start();

COLORES=['Azul', 'Rojo', 'Naranja', 'Verde', 'Violeta', 'Amarillo', 'Marrón', 'Rosa'];

//La variable msj es una cadena de caracteres que al final
//Se volcará en el div de información (ver final del scrpit)
$msj = "<h2>Aquí veremos la información general<h2><hr />";


/**
 *Conseguimos una clave
 */
$clave=obtener_clave();


/**
 * Si he dado a visualizar la clave
 * La visualizo, también cambiamos el texto
 * que visualizará el botón
 */




/**
 * Si hemos dado a jugar vamos a comparar la jugada con la clave
 * Vamos a anotar la jugada en una variable de sesión
 *
 */
if (isset($_POST['jugar'])) {
    $jugada = leer_jugada();
    $aciertos = compara_jugada($clave, $jugada, $pos);
    $msj.= "<h3>En la jugada actual has acertado $aciertos colores y $pos posiciones</h2>";
    $msj.= muestra_resultados();


    /**
     * Si ya he llegado al final de las jugadas vamos a fin.php
     */
}




//Obtenemos  la información, el formulariio de jugar (id jugadas)
//y las opciones
 $formulario = mostrar_formulario_jugada(COLORES);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <script type="text/javascript" src="./js/cambia_color.js">
        </script>
        <link rel="stylesheet" href="./estilo/estilo.css" type="text/css">
    </head>
    <body>
        <!doctype html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Juego de Master Bind</title>
            <link rel="stylesheet" href="estilo.css" type="text/css">
        </head>
        <body>
            <fieldset id="opciones">
                <legend>Opciones de juego</legend>
                <form action="jugar.php" method="POST">
                    <input type='submit' name='clave' value='<?php echo $opcion_clave ?>' />
                </form>
            </fieldset>
            <div id = informacion>$msj</div>";
             <fieldset id = jugadas><legend>Realizar Jugada</legend>
                 <?= $formulario ?>
             </fieldset>";

        </body>
    </html>

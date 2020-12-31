<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modinigoHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
 
	public static function GenerarTabla($params)
    {
		$PrimerCuadrado=rand(0,49);
		$aTabla="<h1>Juego para mejorar tu punteria! </h1><br> <p>Mejora tu precisión con el ratón clicando en el punto blanco</p><br><br><h3 id='puntuacion'>Puntuación= 0</h3><h3 id='contadorT'> 0</h3>";
		$aTabla.="<table border='1'>";
			for($i=0;$i<5;$i++){
				
			$aTabla.='<tr>';
			for($y=0;$y<10;$y++){
				$posicion=($i*10)+$y;
				if($posicion!=$PrimerCuadrado){
					$aTabla.="<td><img id='imCuadrado". $posicion ."' src='/joomla/modules/mod_inigo/images/0.jpg' onclick='Irse(".$posicion.")'/></td>";
				}else{
					
					$aTabla.="<td><img id='imCuadrado". $posicion ."' src='/joomla/modules/mod_inigo/images/diana.jpg' onclick='Irse(".$posicion.")'/></td>";
				}
				
			}
			$aTabla.='</tr>';
		}
		$aTabla.='</table>';
		$aTabla.='
		<script>
var Cuadrado=-1;
var puntos=0;
var contador=0;
var sumapuntos=100;
var contadorTiempo=45;
function Irse(posiAnterior){
	if(Cuadrado==-1){
		Cuadrado=posiAnterior;
	}
	if(posiAnterior==Cuadrado){
		contador++;
		if(contador>5){
			sumapuntos=sumapuntos+10;
		}
		puntos=puntos+sumapuntos;
		document.getElementById("puntuacion").innerHTML=puntos;
	Cuadrado=Math.floor(Math.random() * 50);
	document.getElementById("imCuadrado"+posiAnterior).src="/joomla/modules/mod_inigo/images/0.jpg";
	document.getElementById("imCuadrado"+Cuadrado).src="/joomla/modules/mod_inigo/images/diana.jpg";
	}else{
		contador=0;
		puntos=puntos-100;
		sumapuntos=100;
		document.getElementById("puntuacion").innerHTML="Puntuación: "+puntos;
	}
}
	function Decremento() {
	if (contadorTiempo>0) {
		contadorTiempo--;
		document.getElementById("contadorT").innerHTML="tiempo restante: "+contadorTiempo;
	} else {
		alert("puntuación de="+puntos);
		 puntos=0;
		 contador=0;
		 sumapuntos=100;
		 contadorTiempo=45;
		 document.getElementById("puntuacion").innerHTML="Puntuación: "+puntos;
		 document.getElementById("contadorT").innerHTML="tiempo restante: "+contadorTiempo;
	}
	
	}
	iReloj = setInterval(Decremento, 1000);
	
	</script>
';
	return $aTabla;
	}

}
?>
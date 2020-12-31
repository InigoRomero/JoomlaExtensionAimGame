<?php 
// No direct access
defined('_JEXEC') or die; ?>
<?php 
echo $tabla;

$document = JFactory::getDocument();
$CuadradoAzar=rand(0,49);
$document->addScriptDeclaration('
var Cuadrado=0;
function Irse(posiAnterior){
	Cuadrado=Math.floor(Math.random() * 50);
	document.getElementById("imCuadrado"+posiAnterior).src="/joomla/images/0.jpg";
	document.getElementById("imCuadrado"+posiAnterior).onclick=null;
	document.getElementById("imCuadrado"+Cuadrado).src="/joomla/images/diana.jpg";
	document.getElementById("imCuadrado"+Cuadrado).onclick="Irse(" + Cuadrado + ")";
	//document.getElementById("imCuadrado"+Cuadrado).onclick="Irse('. rand(0,49) .')";
};
');
?>

	  

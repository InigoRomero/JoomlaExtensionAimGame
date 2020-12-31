<?php 
// No direct access
defined('_JEXEC') or die; ?>
<?php 
echo $tabla;
//JHtml::script(Juri::base() .'templates/custom/js/Irse.js');
$document = JFactory::getDocument();
/*$document->addScriptDeclaration('
var Cuadrado=0;
function Irse(posiAnterior){
	Cuadrado=Math.floor(Math.random() * 50);
	document.getElementById("imCuadrado"+posiAnterior).src="/joomla/images/0.jpg";
	document.getElementById("imCuadrado"+posiAnterior).onclick = null;
	document.getElementById("imCuadrado"+Cuadrado).src="/joomla/images/diana.jpg";
	document.getElementById("imCuadrado"+Cuadrado).onclick = "Irse("+Cuadrado+")";
}
');*/
?>

	  

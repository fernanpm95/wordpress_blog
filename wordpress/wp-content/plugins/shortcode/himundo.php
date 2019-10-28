<?php
/*
Plugin Name: Shortcode
*/

//[mundo cual="Marte"]
function agm_mundo_funcion ($atts, $content = null) {
	extract(
		shortcode_atts(
			array('cual'=>'Tierra'),
			$atts)
		);
	if ( empty($content) ) $content = "Hola planeta";
	$codigo = '<p>'.$content.' '.$cual.'!</p>';
	return $codigo;
}
add_shortcode('mundo','agm_mundo_funcion');

?>


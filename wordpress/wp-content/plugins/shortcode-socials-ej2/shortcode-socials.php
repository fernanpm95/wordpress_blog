<?php
/* Plugin name: Shortcode socials
*/
if (! function_exists( 'like_fb' ) ) :

function like_fb ($content) {
		?>

		<iframe 
			src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FPagina-ejemplo-135460340121221%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=false&height=80&appId" 
			width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
		</iframe>
	
		<?php
		return $content;
}
endif;

if(! function_exists( 'follow_tw' )) :

function follow_tw ($content) {
	?>

	<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Visita esta entrada y conoce <?php the_title_attribute(); ?>!" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	<?php
	return $content;
}

endif;

if(! function_exists( 'todos_socials')) :

function todos_socials ($content) {
	like_fb($content);
	?>
	<br/>
	<?php
	follow_tw($content);
	return $content;
}

endif;

function shortcode_socials($atts) {
	extract(
		shortcode_atts(
			array('cual' => "todos"),
			$atts)
	);
	if ($cual == "twitter") {
		$cual = follow_tw($content);
	}
	if ($cual == "facebook") {
		$cual = like_fb($content);
	}
	if ($cual == "todos") {
		$cual = todos_socials($content);
	}
	$codigo = $cual ?><hr/><?php
	return $codigo;
	
}
add_shortcode('botonsocial','shortcode_socials');
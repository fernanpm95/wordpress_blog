<?php
/**
 * Template Name: Plantilla con sidebar
 *
 */
?>

<?php get_header(); ?>

<div id="primary" class="row-fluid">
	<main id="main" class="span8" role="main">
		<?php if (have_posts()): ?>
		<?php
		while ( have_posts() ) : the_post(); ?>

			<article class="post">

				<h1 class ="title"><?php the_title(); ?> </h1>

				<div class="the-content">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>
			</aritcle>
			<?php endwhile;
		else : ?>
			<article class ="post error">
				<h1 class "404">Todavía no hay entradas.</h1>
			</article>
		<?php endif; ?>
</div>
	<div id="sidebar" role="sidebar" class="span4">
		<?php get_sidebar(); ?>
	</div>


<?php get_footer();

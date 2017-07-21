<?php

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if ( have_posts() ) : ?>
	<div class="post-list">
		<?php while ( have_posts() ) : the_post() ?>

			<article <?php post_class() ?>>
				<h1 class="post-title"><?php the_title() ?></h1>
				<?php the_content('viac') ?>
			</article>

		<?php endwhile ?>
	</div>
	<?php endif ?>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

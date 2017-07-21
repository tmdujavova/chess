<?php get_header() ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>

		<div class="onas">
			<?php the_content() ?>
			<?php the_post_thumbnail( 'full', array( 'class' => 'bigass' ) ) ?>
		</div>

		<?php endwhile ?>
	<?php endif ?>

<?php get_footer() ?>
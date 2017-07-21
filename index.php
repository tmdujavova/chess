<?php get_header() ?>

<div class="group">
	<aside class="udalosti">
    <div class="container">
        <?php dynamic_sidebar('sidebar-primary') ?>
    </div>
</aside>


	<?php if ( have_posts() ) : ?>
	<div class="post-list">
		<?php while ( have_posts() ) : the_post() ?>

			<article <?php post_class() ?>>
				<h1 class="post-title"><?php the_title() ?></h1>
				<?php the_content('viac') ?>
			</article>

		<?php endwhile ?>
		<div class="viac"><a href="http://localhost/web/wordpress/aktuality/">Zobraziť viac</a></div>
	</div>
	<?php endif ?>



</div>
<?php get_footer() ?>


<?php get_headers(); ?>

<section class="content" >
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?> </h1>
		<?php the_content(); ?>

			<?php endwhile; else : ?>
					<p><?php _e('Nenhum post encontrado'); ?></p>
				<?php endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
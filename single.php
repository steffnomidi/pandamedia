<?php get_header(); the_post(); ?>
<?php $path = get_bloginfo('template_url').'/'; ?>
</div> <!-- top background-->

<section>
	<div class="container section">
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
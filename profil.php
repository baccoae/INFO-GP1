<?php
/*
Template Name: page profil
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			?>
			<article  style="text-align : center">

				<?php 
					$currentUser = wp_get_current_user();
					$image = get_field('photo', 'user_'.$currentUser->ID);

					if( !empty($image) ): 
						$size = 'thumbnail';
						$thumb = $image['sizes'][ $size ];
						?>
						
						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				<p>Nom : <?php get_field('nom', 'user_'.$currentUser->ID); ?></p>
				<p>Description : <?php get_field('desc', 'user_'.$currentUser->ID); ?></p>
				
			</article>
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

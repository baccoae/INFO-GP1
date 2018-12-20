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
			<article  style="text-align:center">

				<h3>Recrutement</h3>

				<form>
					<label for="metier">Metier</label>
					<input type="text" name="metier" id="metier"/>
					<br/>
					<label for="adresse">Adresse</label>
					<input type="text" name="adresse" id="adresse"/>
				</form>
				<h3>Disponibilité</h3>
				<form>
					<label for="dispo">Disponibilité</label>
					<input type="text" name="metier" id="metier"/>
					<br/>
					<label for="permis">Permis</label>
					<select name="permis" id="permis">
						<option value="1">Oui</option>
						<option value="0" selected>Non</option>
					</select>
					<br/>
					<input type="textarea" rows="5" cols="33"/>
					
					
				</form>
						
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

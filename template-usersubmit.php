<?php /*Template Name: User Submit*/;?>
<?php acf_form_head(); ?>
<?php get_header(); ?>

	<div id="container" >

    <div class="row">
    	<div class="col-sm-12">


			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				<!-- a supprimer si on enlève l'éditeur par défaut -->
				<!--<//?php the_content(); ?>-->
				<!------------>
				<p> <?php the_field('titre_de_lannonce'); ?></p>
				<p> <?php the_field('sous-titre'); ?></p>
				<p> <?php the_field('images'); ?></p>
				<p> <?php the_field('particulier__professionnel'); ?></p>
				<p> <?php the_field('vendre__louer'); ?></p>
                <p> <?php the_field('ville_+_code_postal'); ?></p>
                <p> <?php the_field('adresse'); ?></p>
                <p> <?php the_field('type_de_bien'); ?></p>
                <p> <?php the_field('renseignements'); ?></p>
                <p> <?php the_field('prix'); ?></p>
                <p> <?php the_field('caution'); ?></p>
				<?php  $options = array('post_id'		=> 'new',
			'field_groups' => array(252),
			'post_id'		=> 'new_post',
			'post_title'	=> false,
			'post_type'		=> 'event',
			'post_status'	=> 'publish',
			'updated_message'    => 'Votre annonce sera publiée prochainement',
			'submit_value'	=> 'Postez votre annonce'
			);
				 acf_form($options);?>
			<?php endwhile; ?>
</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
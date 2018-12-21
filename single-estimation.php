<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="estimation">
      <h1 class="title">
        <?php the_title(); ?>
      </h1>
      <table id="tab_esti">
        <tr><th>utilisateur:</th><td><?php echo get_post_meta( $post->ID, 'utilisateur', true ); ?></td></tr>
        <tr><td>type d'estimation:</td><td><?php echo get_post_meta( $post->ID, 'type', true ); ?></td></tr>
        <tr><td>adresse:<?php echo get_post_meta( $post->ID, 'addresse', true ); ?></td></tr>
        <tr><td>type de bien:</td><td><?php echo get_post_meta( $post->ID, 'type_de_bien', true ); ?></td></tr>
        <tr><td>surface habitable:</td><td><?php echo get_post_meta( $post->ID, 'surface', true ); ?></td></tr>
        <tr><td>nombre de chambres:</td><td><?php echo get_post_meta( $post->ID, 'nombre_de_chambre', true ); ?></td></tr>
        <tr><td>type de bien</td><td><?php echo get_post_meta( $post->ID, 'type', true ); ?></td></tr>
        <tr><td>nombre de pièces </td><?php echo get_post_meta( $post->ID, 'nombre_de_pieces', true ); ?></td></tr>
        <tr><td>meublé ou non:<?php echo get_post_meta( $post->ID, 'bien_meuble', true ); ?></td></tr>
        <tr><td>description du bien:<?php echo get_post_meta( $post->ID, 'description', true ); ?></td></tr>
        <tr><td>prix estimé:<?php echo get_post_meta( $post->ID, 'prix_du_bien', true ); ?></td></tr>

      <div class="content">
        <?php the_content(); ?>
              </div>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
<?php get_sidebar(); ?>
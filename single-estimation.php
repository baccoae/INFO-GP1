<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="estimation">
      <h1 class="title">
        <?php the_title(); ?>
      </h1>
<form id="esti" method="post">
          <fieldset class="form-group">
            <div class="ln">
             <?php 
             if (get_post_meta( $post->ID, 'utilisateur', true ) == 'professionnel'): ?>
              <input type="button" name="pro" class="pro select-btn btn" value="<?php echo get_post_meta( $post->ID, 'utilisateur', true ); ?>"/>
              <input type="button" name="part" class=" btn" value="particulier" style="background-color:#E1CC63"/>
             <?php 
             endif;
              if (get_post_meta( $post->ID, 'utilisateur', true ) == 'particulier'): ?>
              <input type="button" name="part" class="part select-btn" value="<?php echo get_post_meta( $post->ID, 'utilisateur', true ); ?>"/>
              <input type="button" name="pro" class="btn" value="professionnel"/>
              <?php 
              endif; ?>
            </div>
            <div class="ln">
            <?php if (get_post_meta( $post->ID, 'type_esti', true ) == 'location'): ?>
            <input type="button" name="typeest" class="btn select-btn"value="<?php echo get_post_meta( $post->ID, 'type_esti', true ); ?>"/>
            <input type="button" name="typeest2" class="btn" value="vente"/>
            <?php endif;
            if (get_post_meta( $post->ID, 'type_esti', true ) == 'vente'): ?>
             <input type="button" name="typeest" class="btn select-btn" value="<?php echo get_post_meta( $post->ID, 'type_esti', true ); ?>"/>
            <input type="button" name="typeest2" class="btn" value="location"/>
            <?php endif; ?>
            </div>
            <div class="ln">
              <input type="text" name="adresse" id="adresse" value="<?php echo get_post_meta( $post->ID, 'adresse', true ); ?>" />
              <input type="text" name="adresse" id="adresse" value="<?php echo get_post_meta( $post->ID, 'code', true ); ?>" />
            </div>
            <div class="ln">
              <?php if (get_post_meta( $post->ID, 'type', true ) == 'appartement'):?>
              <input type="button" name="typeb1" class="btn select-btn" value="appartement"/>
              <input type="button" name="typeb2" class="btn" value="terrain"/>
            </div>
            <div class="ln">
              <input type="button" name="typeb3" class="btn" value="maison"/>
              <input type="button" name="typeb2" class="btn" value="loft/studio"/>
            <?php endif;
            if (get_post_meta( $post->ID, 'type', true ) == 'terrain'):?>
              <input type="button" name="typeb1" class="btn" value="appartement"/>
              <input type="button" name="typeb2" class="btn select-btn" value="terrain"/>
            </div>
            <div class="ln">
              <input type="button" name="typeb3" class="btn" value="maison"/>
              <input type="button" name="typeb2" class="btn" value="loft/studio"/>
              <?php endif;
            if (get_post_meta( $post->ID, 'type', true ) == 'maison'):?>
              <input type="button" name="typeb1" class="btn" value="appartement"/>
              <input type="button" name="typeb2" class="btn" value="terrain"/>
            </div>
            <div class="ln">
              <input type="button" name="typeb3" class="typeb select-btn" value="maison"/>
              <input type="button" name="typeb2" class="btn" value="loft/studio"/>
              <?php endif;
            if (get_post_meta( $post->ID, 'type', true ) == 'loft/studio'):?>
              <input type="button" name="typeb1" class="btn" value="appartement"/>
              <input type="button" name="typeb2" class="btn" value="terrain"/>
            </div>
            <div class="ln">
              <input type="button" name="typeb3" class="btn" value="maison"/>
              <input type="button" name="typeb2" class="btn select-btn" value="loft/studio"/>
            <?php endif; ?>
            </div>
            <div class="ln">
              <input type="number" name="surface"  value="<?php echo get_post_meta( $post->ID, 'surface', true ); ?>"/>
              <input type="number" name="surface"  value="<?php echo get_post_meta( $post->ID, 'nombre_de_chambre', true ); ?>"/>
            </div>
            <div class="ln">
              <input type="number" name="surface"  value="<?php echo get_post_meta( $post->ID, 'nombre_de_pieces', true ); ?>" />
              <div id="meub">
              <?php echo get_post_meta( $post->ID, 'bien_meuble', true );?>
              </div>
            </div>
            <div class="ln">
            description du bien:
            <textarea>
            <?php echo get_post_meta( $post->ID, 'description', true ); ?>
            </textarea>
            </div>
             <div class="ln">
                prix estimé:<input type="number" name="surface" class="nb" value="<?php echo get_post_meta( $post->ID, 'prix_du_bien', true ); ?>" />
                caution (si nécessaire)<input type="number" name="caution" class="nb" value="<?php echo get_post_meta( $post->ID, 'caution', true ); ?>" />
            </div>
            </fieldset>
        </form>
      <div class="content">
        <?php the_content(); ?>
              </div>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
<?php get_sidebar(); ?>

<h1><?php the_title(); ?></h1>

<?php if( get_field('sub_heading') ): ?>
    <h2><?php the_field('sub_heading'); ?></h2>
<?php endif; ?>

<div class="vendre">
    <?php $image = get_field('vendre'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<?php if( have_rows('event') ): ?>
    <ul>
    <?php while( have_rows('event') ): the_row(); ?>
        <li>
            <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>


<div class="meta">

                <?php if( get_field('titre_de_lannonce') ): ?>
                <p> <strong>Titre de l'annonce</strong> :<?php the_field('titre_de_lannonce'); ?></p>
            <?php endif; ?>


            <?php if( get_field('sous-titre') ): ?>
            <p> <strong>Sous-titre</strong> :<?php the_field('sous-titre'); ?></p>
        <?php endif; ?>

        <?php if( get_field('images') ): ?>
        <p> <strong>Photos du bien</strong>:<?php the_field('images'); ?></p>
    <?php endif; ?>

    <?php if( get_field('particulier__professionnel') ): ?>
    <p> <strong>Particulier / Professionnel</strong>:<?php the_field('particulier__professionnel'); ?></p>
<?php endif; ?>

<?php if( get_field('vendre__louer') ): ?>
    <p><strong>Vendre / Louer</strong>:<?php the_field('vendre__louer'); ?></p>
<?php endif; ?>

<?php if( get_field('ville_+_code_postal') ): ?>
    <p><strong>Ville + code postal</strong>:<?php the_field('ville_+_code_postal'); ?></p>
<?php endif; ?>

<?php if( get_field('adresse') ): ?>
    <p><strong>Adresse</strong>:<?php the_field('adresse'); ?></p>
<?php endif; ?>


<?php if( get_field('type_de_bien') ): ?>
    <p><strong>Type de bien</strong>:<?php the_field('type_de_bien'); ?></p>
<?php endif; ?>

<?php if( get_field('renseignements') ): ?>
    <p><strong>Renseignements supplémentaires</strong>:<?php the_field('renseignements'); ?></p>
<?php endif; ?>

<?php if( get_field('prix') ): ?>
    <p><strong>Prix</strong>:<?php the_field('prix'); ?></p>
<?php endif; ?>

<?php if( get_field('caution') ): ?>
    <p><strong>Caution</strong>:<?php the_field('caution'); ?></p>
<?php endif; ?>


</div>
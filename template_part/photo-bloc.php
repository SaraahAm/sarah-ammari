<?php 
    // Récupération des informations de la photo
    $photo_site = get_the_content();
    $titre_site = get_field('titre');
    $lien_site = get_field('link');
    $description_site = get_field('description');
    $titre_nettoye = sanitize_title($titre_site);
    $lien_post = get_site_url().'/projets/'. $titre_nettoye;
?>
<!-- Affichage du bloc site -->

<div class="card zoom">
    <a href="<?php echo $lien_post; ?>">   <!-- lien site $lien_site --> 
        <?php echo $photo_site; ?>  
    </a>
    <div class="titre-card">
        <?php echo $titre_site; ?>  
    </div> 
    <!--<div class="info-card">
        <?php /* echo $description_site */?>
    </div>-->
</div>
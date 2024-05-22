<?php
	get_header();
?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#76528b" fill-opacity="1" d="M0,32L60,37.3C120,43,240,53,360,53.3C480,53,600,43,720,64C840,85,960,139,1080,133.3C1200,128,1320,64,1380,32L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

<?php 
	// Récupérer les informations du site
	$photo_site = get_the_content();
    $titre_site = get_field('titre');
    $description_site = get_field('description');
	$lien_site = get_field('link');
?>

<section class="single-site">
	<h2> <?php echo $titre_site ?> </h2>
	<div class="online-project">
		<div class="access-section">
			<div class="site-access">
				<div class="site-access-photo zoom">
					<a href="<?php echo $lien_site; ?>">   
						<?php echo $photo_site; ?>  
					</a>
				</div>
				<div class="meta-site">
					<div class="description-site">
						<?php var_dump($description_site)?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="form-section-single">
            <div class='title'>
                <h2 id="ancre-contact" class="test">   CONTACT<h2>
            </div>
            <div class="contact-p">
                <p>Mon profil vous intéresse et vous souhaitez prendre contact avec moi, contactez moi !</p>
            </div>
            <div class="contact-form">
                <?php
                    // On insère le formulaire de demandes de renseignements
                    echo do_shortcode('[contact-form-7 id="b6d4715" title="Contact"]');
                ?>
            </div>
        </div>
    </section>






<?php
/*
// Récupération de l'identifiant de la photo (nom) dans l'URL
$slug = get_query_var('projet');

// Construction des critères de recherche
$args = [
    'post_type' => 'projet',
    'name' => $slug,
    'posts_per_page' => 1
];

// Requête auprès de la base de données wordpress pour récupérer la photo correspondante
$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();

	$reference = get_field('reference');
	$type = get_field('type');
	$categories = wp_get_post_terms(get_the_ID(), 'categorie');
	$formats = wp_get_post_terms(get_the_ID(), 'formats');
	$lien_site = get_field('link');
	$photo_site = get_the_content();

?>

<a href="<?php echo $lien_site; ?>">   <!-- lien site $lien_site --> 
        <?php echo $photo_site; ?>  
    </a>
<?php
    endwhile;
    	
endif;*/
?>
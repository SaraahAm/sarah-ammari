<?php
	get_header();

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

<h1>hello test</h1>


<a href="<?php echo $lien_site; ?>">   <!-- lien site $lien_site --> 
        <?php echo $photo_site; ?>  
    </a>
<?php
    endwhile;
    	
endif;
?>
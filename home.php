<!-- On affiche le header -->
<?php
get_header();
?>

<!-- On affiche le hero -->
    <section class="hero">
        <h1> W E L C O M E </h1>
        <div class="hero-content">
            <div class="image-ronde">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/computer-girl.jpg" alt="girl on computer">
            </div>
        </div>
    </section>

<!-- On affiche la présentation -->
    <section class="presentation-section">
        <h2 id="ancre-presentation">PRÉSENTATION</h2>
        <p> Bienvenue dans mon portfolio, un espace où la curiosité rencontre la créativité. </p>
        <p>En tant qu'étudiant en développement web, je suis déterminé à repousser les limites de mes compétences et à créer des projets qui captivent et inspirent. Vous y découvrirez une sélection de mes projets les plus récents, chacun représentant une étape de mon parcours d'apprentissage et une opportunité d'explorer de nouvelles technologies et concepts.</p>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#76528b" fill-opacity="1" d="M0,32L60,37.3C120,43,240,53,360,53.3C480,53,600,43,720,64C840,85,960,139,1080,133.3C1200,128,1320,64,1380,32L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

<!-- On affiche le zone projet -->
    <section class="project-section">
        <div class='title'>
            <h2 id="ancre-projet">MES PROJETS<h2>
        </div>
        <p>Chaque projet que j'ai entrepris a été motivé avec le désir de relever des défis techniques et de trouver des solutions créatives qui répondent aux besoins de l'utilisateur. Je vous invite à parcourir mes projets afin de découvrir la qualité et la variété de mon travail. </p>
        <div class="project">
            <div class="site-section">
                <div class="site-card">
                <!-- Création d'une loop pour afficher tous les projets -->
                <?php
                $args = array(
                    'post_type' => 'projet',
                    'posts_per_page' => 8,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'paged' => 1,
                );

                $photo_query = new WP_Query($args);

                if ($photo_query->have_posts()) {
                    while ($photo_query->have_posts()) {
                        $photo_query->the_post();
                        get_template_part('template_part/photo-bloc');
                    }
                    wp_reset_postdata();
                } else {
                    echo 'Aucune photo trouvée.';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- On affiche le form -->
    <section class="form-section">
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

    
<!-- On affiche le footer -->
<?php
get_footer();
?>
    


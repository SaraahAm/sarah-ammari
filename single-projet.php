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
				<div class="card-single zoom">
					<a href="<?php echo $lien_site; ?>">   
						<?php echo $photo_site; ?>  
					</a>
				</div>
				<div class="meta-site">
						<div class="description-site">
							<?php echo $description_site?>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="svg-wave">
	<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 242, 215, 1)" offset="0%"></stop><stop stop-color="rgba(255, 242, 215, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L60,6.7C120,13,240,27,360,28.3C480,30,600,20,720,13.3C840,7,960,3,1080,13.3C1200,23,1320,47,1440,51.7C1560,57,1680,43,1800,38.3C1920,33,2040,37,2160,46.7C2280,57,2400,73,2520,75C2640,77,2760,63,2880,56.7C3000,50,3120,50,3240,41.7C3360,33,3480,17,3600,20C3720,23,3840,47,3960,56.7C4080,67,4200,63,4320,55C4440,47,4560,33,4680,26.7C4800,20,4920,20,5040,20C5160,20,5280,20,5400,30C5520,40,5640,60,5760,58.3C5880,57,6000,33,6120,20C6240,7,6360,3,6480,8.3C6600,13,6720,27,6840,40C6960,53,7080,67,7200,68.3C7320,70,7440,60,7560,53.3C7680,47,7800,43,7920,35C8040,27,8160,13,8280,11.7C8400,10,8520,20,8580,25L8640,30L8640,100L8580,100C8520,100,8400,100,8280,100C8160,100,8040,100,7920,100C7800,100,7680,100,7560,100C7440,100,7320,100,7200,100C7080,100,6960,100,6840,100C6720,100,6600,100,6480,100C6360,100,6240,100,6120,100C6000,100,5880,100,5760,100C5640,100,5520,100,5400,100C5280,100,5160,100,5040,100C4920,100,4800,100,4680,100C4560,100,4440,100,4320,100C4200,100,4080,100,3960,100C3840,100,3720,100,3600,100C3480,100,3360,100,3240,100C3120,100,3000,100,2880,100C2760,100,2640,100,2520,100C2400,100,2280,100,2160,100C2040,100,1920,100,1800,100C1680,100,1560,100,1440,100C1320,100,1200,100,1080,100C960,100,840,100,720,100C600,100,480,100,360,100C240,100,120,100,60,100L0,100Z"></path></svg>
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
	get_footer();
?>
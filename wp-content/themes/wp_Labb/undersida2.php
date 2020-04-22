<!-- Template Name: Undersida 2 
 -->
<?php get_header();
$title = get_field('title');
$detail_note = get_field('detail_note');
?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
							<h1><?php echo $title;?></h1>
							<p><?php echo $detail_note;?></p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
						<?php	
						wp_nav_menu(
                            array(
                                'theme_location' => 'side-menu',
                                'container' => 'ul',
                                'menu_class' => 'side-menu'
                            )
						);
					?>
							<!-- <ul class="side-menu">
								<li>
									<a href="undersida.html">Undersida</a>
								</li>
								<li>
									<a href="undersida2.html">Undersida 2</a>
								</li>
								<li>
									<a href="undersida3.html">Undersida 3</a>
								</li>
								<li>
									<a href="undersida4.html">Undersida 4</a>
								</li>
							</ul> -->
						</aside>
					</div>
				</div>
			</section>
		</main>
        
<?php get_footer();?>
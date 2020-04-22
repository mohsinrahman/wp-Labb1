<!-- WP get_header method to include header.php file -->
<?php get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                <!-- ACF repeater Loop to retrive values -->
                                <?php if( have_rows('slider') ): ?> 
                                <div class="flexslider">
                                <ul class="slides">     
                                <?php while( have_rows('slider') ): the_row(); 
                                    // vars
                                    $image = get_sub_field('image');
                                    $imageurl = $image['sizes']['slide'];
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    ?>
                            
                                     <li>
                                        <img style=" width: 1150px;height: 500px;" src="<?php echo $imageurl; ?>"/>
                                        <div class="text">
                                            <h1><?php echo $title;?></h1>
									        <p><?php echo $text;?></p>
								        </div>
                                    </li>

                                <?php endwhile; ?> 
                                </ul>
                            </div>
                            <?php endif; ?>        
                               
								
							</div>
						</div>
					</div>
				</div>
			</section>
</main>
<!-- WP get_header method to include footer.php file -->
<?php get_footer(); ?>
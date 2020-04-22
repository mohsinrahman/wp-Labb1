
<!-- Template Name: Undersida 4 
 -->
<?php get_header();
$title = get_field('title');
$detail_note = get_field('detail_note');
$image = get_field('image');
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<h1><?php echo $title;?></h1>
						<p><?php echo $detail_note;?></p>							
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php echo $image['url'];?>" />
						</div>
					</div>
				</div>
			</section>
		</main>

        
<?php get_footer();?>
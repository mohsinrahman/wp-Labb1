<!-- Template Name: Undersida 3 
 -->
<?php get_header();
$title = get_field('title');
$detail_note = get_field('detail_note');
?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
							<h1><?php echo $title;?></h1>
							<p><?php echo $detail_note;?></p>
						</div>
					</div>
				</div>
			</section>
		</main>
        
<?php get_footer();?>
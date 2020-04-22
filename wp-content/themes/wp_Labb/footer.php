<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4><?php the_field('about_us_heading', 'option'); ?></h4>
						<p><?php the_field('note_part1', 'option'); ?></p>
						<p><?php the_field('note_part2', 'option'); ?></p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php  $arr1 = get_field('address', 'option'); 
						   $arr2 = get_field('tel_and_email', 'option');
						   $arr3 = get_field('social_media', 'option');
					?>
						<h4><?php echo $arr1[heading]; ?></h4>
						<p>
						<?php echo $arr1[company_name]; ?><br />
						<?php echo $arr1[street_no]; ?><br />
						<?php echo $arr1[post_no]; ?>
						</p>
						<p>
						<?php echo $arr2[tel]; ?><br />
						<?php echo $arr2[email]; ?></a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">
							<li>
								<i class="fa fa-facebook"></i> <a href=""><?php echo $arr3[facebook]; ?></a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href=""><?php echo $arr3[twitter]; ?></a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href=""><?php echo $arr3[instagram]; ?></a>
							</li>
							<li>
								<i class="fa fa-linkedin"></i> <a href=""><?php echo $arr3[linkedin]; ?></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2017</p>
					</div>
				</div>
			</div>
		</footer>

	</div>
<?php wp_footer(); ?>
</body>
</html>

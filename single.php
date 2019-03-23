<?php get_header(); ?>

				<!-- Main -->
					<div id="main">

						

						<!-- Posts -->
							<section class="">

								<?php  while (have_posts()) :  
									the_post();
									?>
									

								
									<article>
										<header>
											<span class="date"><?php echo get_the_date() ; ?></span>
											<h2 ><?php the_title(); ?></h2>
										</header>
										<?php the_post_thumbnail("full"); ?>
										 <?php the_content() ; ?>
										
									</article>


							<?php endwhile; ?>
								
								
								
								
								
							</section>

						<!-- Footer -->
							 

					</div>

			<?php get_footer(); ?>
<?php get_header(); ?>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">April 25, 2017</span>
									<h2><a href="#">And this is a<br />
									massive headline</a></h2>
									<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
									facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
									amet nullam sed etiam veroeros.</p>
								</header>
								<a href="#" class="image main"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">

								<?php  while (have_posts()) :  
									the_post();
									?>
									

								
									<article>
										<header>
											<span class="date"><?php echo get_the_date() ; ?></span>
											<h2><a href="<?php the_permalink() ; ?>"><?php the_title(); ?></a></h2>
										</header>
										<a href="#" class="image fit"><?php the_post_thumbnail("massively_post_thumb"); ?></a>
										<p> <?php the_excerpt() ; ?></p>
										<ul class="actions special">
											<li><a href="<?php the_permalink(); ?>" class="button">Full Story</a></li>
										</ul>
									</article>


							<?php endwhile; ?>
								
								
								
								
								
							</section>

						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!-- 	<a href="#" class="previous">Prev</a>
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a> -->
									<?php 

							the_posts_pagination( array(
									"screen_reader_text" => '  ',
									"prev_text"          => "< PREV",
									"next_text"          => "NEXT >"
							) );

						 ?>
								</div>
							</footer> 

					</div>

			<?php get_footer(); ?>
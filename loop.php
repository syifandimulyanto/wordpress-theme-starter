<div id="about">
		<section id="story">
			<div class="container">
				
				<h2 class="sectionHeading wow flash" data-wow-iteration="10">
					<span class="subHeading">What we do</span>
					Story about us
				</h2>
				<p class="sectionDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				<div class="sectionContent">
					<div class="row hoverEffect">
					<?php 
						$args = array( 'post_type' => 'storys', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						$no=0;
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<div class="col-md-4 col-sm-4 wow <?php if($no == 0) echo 'slideInLeft';elseif($no == 1) echo 'bounceInUp';elseif($no == 2) echo 'slideInRight'; ?>">
							<div class="item">
								<a class="overlay" href="#">
									<span class="content">
										<i class="mdi <?php if($no == 0) echo 'mdi-account-multiple';elseif($no == 1) echo 'mdi-image-filter-center-focus-weak';elseif($no == 2) echo 'mdi mdi-airplay icon'; ?> icon"></i>
										<?php the_title(); ?>
									</span>
									<?php the_post_thumbnail();?>
								</a>
							</div>
						</div>
					<?php 
						$no++;
						endwhile;
					 ?>
					</div>
				</div>
			</div>		
		</section><!--/#story-->
	</div>

	<!-- Counting -->
    <section id="counting">
    	<div class="container">
    		<div layout="row" class="verticalStretch">
    			<div class="item">
    				<div class="number"><span class="count">42</span></div>
    				<div class="text">Web Design Projects</div>
    			</div>
    			<div class="item">
    				<div class="number"><span class="count">123</span></div>
    				<div class="text">happy client</div>
    			</div>
    			<div class="item">
    				<div class="number"><span class="count">15</span></div>
    				<div class="text">award winner</div>
    			</div>
    			<div class="item">
    				<div class="number"><span class="count">99</span></div>
    				<div class="text">cup of coffee</div>
    			</div>
    			<div class="item">
    				<div class="number"><span class="count">24</span></div>
    				<div class="text">members</div>
    			</div>
    		</div>
    	</div>
    </section><!--/#counting-->

    <!-- Services -->
    <section id="services">
    	<div class="container">
    		<h2 class="sectionHeading wow flash" data-wow-iteration="10">
				<span class="subHeading">We work with</span>
				Amazing Services
			</h2>
			<div class="sectionContent">			
				<div class="fw" layout="row">
				
				  <div class="wow slideInDown">
				  <?php 
					$args = array( 'post_type' => 'services', 'posts_per_page' => 6 );
					$the_query = new WP_Query( $args ); 
					$no=0;
					while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					<div class="col-md-4 col-sm-6 item ">
						<div layout="row">
						
							<i class="mdi <?php if($no == 0) echo 'mdi-apple-keyboard-command icon fsr';elseif(($no == 1)) echo 'mdi-blender icon fsr'; elseif(($no == 2)) echo 'mdi-bookmark-plus-outline icon fsr';elseif(($no == 3)) echo 'mdi-buffer icon fsr';elseif(($no == 4)) echo 'mdi-desktop-mac icon fsr';elseif(($no == 5)) echo 'mdi-diamond icon fsr'; 	$no++;?> "></i>
							<div>
								<h4 class="serviceTitle"><?php the_title(); ?></h4>
								<p>
									
										<div class="entry-content">
										<?php the_content(); ?> 
										</div>

								</p>
							</div>
						</div>
					</div>
				  <?php endwhile; ?>
				  </div>
				</div>
			</div>
    	</div>
    </section><!--/#services-->

    <!-- Unique Design -->
    <section id="uniqueDesign">
    	<div class="container">
    		<h2 class="sectionHeading wow flash" data-wow-iteration="10">
				<span class="subHeading">For all devices</span>
				Unique design
			</h2>
			<div class="sectionContent">
				<div class="devices">
					<div class="wow shake"><img class="tablet" src="<?php echo bloginfo('template_url');?>/images/unique-design/img-1.png" alt=""></div>
					<div class="wow swing"><img class="mobile" src="<?php echo bloginfo('template_url');?>/images/unique-design/img-2.png" alt=""></div>
				</div>
			</div>
    	</div>
    </section><!--/#uniqueDesign-->

    <!-- What We Do -->
    <section id="whatWeDo">
    	<div class="container">
    		<h2 class="sectionHeading wow flash" data-wow-iteration="10">
				<span class="subHeading">Service</span>
				what we do
			</h2>
			<p class="sectionDesc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p>
			<div class="sectionContent">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center">
							<div class="wow slideInLeft"><img src="<?php echo bloginfo('template_url');?>/images/what-we-do/img-1.jpg" alt=""></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php 
								$args = array( 'post_type' => 'whatwedo', 'posts_per_page' => 3 );
								$loop = new WP_Query( $args );
								$no=1;
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="<?php if($no == 1) echo 'headingOne';elseif($no == 2) echo 'headingTwo';elseif($no == 3) echo 'headingThree'; ?>">
									<h4 class="panel-title">
										<a class="<?php if($no == 1) echo '';elseif($no == 2) echo 'collapse';elseif($no == 3) echo 'collapse'; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="<?php if($no == 1) echo '#collapseOne';elseif($no == 2) echo '#collapseTwo';elseif($no == 3) echo '#collapseThree'; ?>" aria-expanded="<?php if($no == 1) echo 'true';elseif($no == 2) echo 'false';elseif($no == 3) echo 'false'; ?>" aria-controls="<?php if($no == 1) echo 'collapseOne';elseif($no == 2) echo 'collapseTwo';elseif($no == 3) echo 'collapseThree'; ?>">
											<i class="mdi mdi-chevron-up icon arrow"></i>
											<i class="mdi <?php if($no == 1) echo 'mdi-laptop-mac';elseif($no == 2) echo 'mdi-owl';elseif($no == 3) echo 'mdi-camera'; ?> icon"></i> 
											<?php the_title(); ?>
										</a>
									</h4>
								</div>
								<div id="<?php if($no == 1) echo 'collapseOne';elseif($no == 2) echo 'collapseTwo';elseif($no == 3) echo 'collapseThree'; ?>" class="<?php if($no == 1) echo 'panel-collapse collapse in';elseif($no == 2) echo 'panel-collapse collapse';elseif($no == 3) echo 'panel-collapse collapse'; ?>" role="tabpanel" aria-labelledby="<?php if($no == 1) echo 'headingOne';elseif($no == 2) echo 'headingTwo';elseif($no == 3) echo 'headingThree'; ?>">
									<div class="panel-body">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<?php
								$no++;
								endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section><!--/#whatWeDo-->

    <!-- Testimonial -->
    <section class="testimonial">
    	<div class="container">
    		<div class="testimonialSlider">
				<ul>
					<li>
						<div layout="row">
							<div class="symbol fsr">
								<i class="mdi mdi-comment-multiple-outline icon"></i>
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row">
							<div class="symbol fsr">
								<i class="mdi mdi-wechat icon"></i>	
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row">
							<div class="symbol fsr">
								<i class="mdi mdi-message-text-outline icon"></i>
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
    	</div>
    </section><!--/#testimonial-->

    <!-- Our Team -->
	<section id="ourTeam">
		<div class="container">
			<h2 class="sectionHeading wow flash" data-wow-iteration="10">
				<span class="subHeading">Who we are</span>
				Meet our team
			</h2>
			<p class="sectionDesc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p>
			<div class="sectionContent">
				<div class="row hoverEffect">
 				<?php 
					$args = array( 'post_type' => 'team', 'posts_per_page' => 6 );
					$the_query = new WP_Query( $args ); 
					$no=0;
					
					while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
					<div class="col-md-4 col-sm-4 wow <?php if($no == 0) echo 'slideInLeft';elseif($no == 2) echo 'slideInRight';else echo 'flash';?>">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="icon"><i class="mdi mdi-instagram"></i></a>
								</div>
							 <?php the_post_thumbnail('medium_large', array('class' => 'img')); ?>
							</div>
						</div>
						
						<div class="info">
							<h4 class="name"><?php the_title();?></h4>
							
							
							<span class="regency">
						<?php 
								$terms = get_the_terms($post->ID, 'team_category' );
								if ($terms && ! is_wp_error($terms)) :
    							$tslugs_arr = array();		
    							foreach ($terms as $term) {
        														$tslugs_arr[] = $term->slug;
    														}
    							$terms_slug_str = join( " ", $tslugs_arr);
								endif;
								echo $terms_slug_str;
						?>
							</span>
							<?php ?>
						</div>
					</div>
					<?php $no++ ;endwhile; ?>
				</div>
				
				

			</div> 
		</div>
	</section><!--/#ourTeam-->

	<!-- Brand -->
    <section id="brand">
    	<div class="container">
    		<div class="verticalCenter fw" layout="row">

    		<?php 
					$args = array( 'post_type' => 'brand', 'posts_per_page' => 7 );
					$the_query = new WP_Query( $args ); 
					$no=0;
					while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
    			<div class="col-md-2 col-sm-4 col-xs-6 wow flip"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large', array('class' => '')); ?></a></div>
    		<?php 
    		endwhile;
    		?>
    		</div>
    	</div>
    </section><!--/#brand-->

	<!-- Portfolio -->
    <div id="work">
		<section id="portfolio">
			<div class="container">
				<h2 class="sectionHeading wow flash" data-wow-iteration="10">
					<span class="subHeading">What we do</span>
					some of our work
				</h2>
				<p class="sectionDesc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</p>
			</div>
			<div class="sectionContent">
				<ul class="portfolioItems wow tada">
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-1.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-1.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-crown icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="<?php echo bloginfo('template_url');?>/images/our-work/img-2.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-2.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-cube-outline icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="<?php echo bloginfo('template_url');?>/images/our-work/img-3.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-3.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-desktop-mac icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="<?php echo bloginfo('template_url');?>/images/our-work/img-4.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-4.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-flower icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="<?php echo bloginfo('template_url');?>/images/our-work/img-5.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-5.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-gamepad-variant icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-6.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-6.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-gnome icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
					<li class="item">
						<a class="prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-7.jpg">
							<img src="<?php echo bloginfo('template_url');?>/images/our-work/img-7.jpg" />
							<div class="overlay">
								<div class="content">
									<i class="mdi mdi-guitar-electric icon"></i>
									<h4 class="title">creatively designed</h4>
									<span class="desc">Lorem ipsum dolor sit</span>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</section><!--/#portfolio-->
	</div>

	<!-- Testimonial -->
    <section class="testimonial bg-white">
    	<div class="container">
    		<div class="testimonialSlider">
				<ul>
					<?php 
						$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						$no=0;
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<li>
						<div layout="row" class="verticalCenter">
							<div class="avatar fsr">
								<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle img-thumbnail')); ?>
							</div>
							<div>
								<p class="quote">"<?php the_excerpt(); ?>"</p>
								<span class="name"><?php the_title(); ?></span>
							</div>
						</div>
					</li>
					<?php 
						$no++;
						endwhile;
					?>
			</div>
    	</div>
    </section><!--/#testimonial-->

    <!-- Happy Client -->
    <section id="happyClient">
    	<div class="container">
    		<h2 class="sectionHeading wow flash" data-wow-iteration="10">
				<span class="subHeading">Happy Clients</span>
				What people say
			</h2>
			<div class="sectionContent wow wobble">
				<div class="row">
					<?php 
						$args = array( 'post_type' => 'happyclient', 'posts_per_page' => 4 );
						$loop = new WP_Query( $args );
						$no=0;
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="avatar fsr">
								<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>
							</div>
							<div class="info">
								<h4 class="name"><?php the_title(); ?></h4>
								<span class="regency"><?php the_category(); ?></span>
								<p class="desc">
									<?php the_excerpt(); ?>
								</p>
							</div>
						</div>
					</div>
					<?php 
						$no++;
						endwhile;
					?>
			</div>
    	</div>
    </section><!--/#happyClient-->

    <!-- Latest Blog -->
    <div id="blog">
	    <section id="latestBlog">
	    	<div class="container">
	    		<h2 class="sectionHeading wow flash" data-wow-iteration="10">
					<span class="subHeading">Our stories</span>
					Latest Blog
				</h2>
				<div class="sectionContent">
					<div class="row">
					<?php 
						$args = array( 'post_type' => 'blog', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						$no=0;
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<div class="col-md-4 col-sm-4 wow <?php if($no == 0) echo 'slideInLeft';elseif($no == 1) echo 'bounce';elseif($no == 2) echo 'slideInRight'; ?>">
							<article>
								<div class="articleThumb">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
									<div class="date">
										<span class="number"><?php the_time('j');?></span>
										<span class="text"><?php the_time('M');?> </span>
									</div>
								</div>
								<h3 class="articleTitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
								<p class="articleDesc">
									<?php the_excerpt(); ?>
								</p>
								<div class="articleMeta">
									<a href="#"><i class="mdi mdi-eye icon"></i> 542</a>
									<a href="#"><i class="mdi mdi-comment-multiple-outline icon"></i> 17</a>
								</div>
							</article>
						</div>
					<?php 
						$no++;
						endwhile;
					?>
					</div>
				</div>
	    	</div>
	    </section><!--/#latestBlog-->
    </div>

    <!-- Map -->
    <div id="contact">
	    <section id="map">
	    	<div class="container">
	    		<h2 class="sectionHeading">
	    			<i class="mdi mdi-map-marker icon wow flash" data-wow-iteration="infinite"></i>
	    			<span class="text">Open map</span>
	    			<span class="text" style="display: none;">Close map</span>
	    		</h2>
	    		<div class="mapWrap">
		    		<iframe src="https://www.google.com/maps/embed/v1/place?q=Tirtasani+Royal+Resort,+RP3-9+Malang+,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		    	</div>
	    	</div>
	    </section><!--/#map-->
    </div>
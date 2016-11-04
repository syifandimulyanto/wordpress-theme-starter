			    <footer id="footer">
			        <div class="container">
			        	<div class="row">
			        		<div class="col-md-4">
			        			<div class="colInfo">
				        			<div class="footerLogo">
				        				<a href="<?php echo home_url(); ?>" ><?php echo bloginfo('name'); ?></a>	
				        			</div>
				        			<p>
				        				<?php echo bloginfo('description'); ?>
				        			</p>
				        			<div class="followUs">
				        				<div class="totalFollow"><span>15k</span> followers</div>
				        				<div class="socialNetwork">
				        					<span class="text">Follow Us: </span>
				        					<a href="" class="icon"><i class="mdi mdi-facebook"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-twitter"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-instagram"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-pinterest"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-google-plus"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-youtube-play"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-dribbble"></i></a>
				        					<a href="" class="icon"><i class="mdi mdi-tumblr"></i></a>
				        				</div>
				        			</div>
				        			<form action="" class="subscribeForm">
				        				<div class="input-group input-group-lg">
											<input type="email" class="form-control" placeholder="Your Email" required>
											<span class="input-group-btn">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</span>
										</div>
				        			</form>
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6">
			        			<div class="colInfo">
				        			<h3 class="colHeading">Blogs</h3>
				        			<ul class="listArticles">
				        			<?php 
										$args = array( 'post_type' => 'blog', 'posts_per_page' => 3 );
										$loop = new WP_Query( $args );
										$no=0;
										while ( $loop->have_posts() ) : $loop->the_post();
									?>
				        				<li layout="row" class="verticalCenter">
				        					<a class="articleThumb fsr" href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
				        					<div class="info">
				        						<h3 class="articleTitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
				        						<div class="date"><?php the_time('M j,Y');?></div>
				        					</div>
				        				</li>
				        			<?php 
										$no++;
										endwhile;
									?>
				        			<!-- 	<li layout="row" class="verticalCenter">
				        					<a class="articleThumb fsr" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/our-blog/img-5.jpg" alt=""></a>
				        					<div class="info">
				        						<h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
				        						<div class="date">Jan 9, 2016</div>
				        					</div>
				        				</li>
				        				<li layout="row" class="verticalCenter">
				        					<a class="articleThumb fsr" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/our-blog/img-6.jpg" alt=""></a>
				        					<div class="info">
				        						<h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
				        						<div class="date">Jan 9, 2016</div>
				        					</div>
				        				</li> -->
				        			</ul>
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6">
			        			<div class="colInfo">
				        			<h3 class="colHeading">instagram</h3>
				        			<div class="instagramImages clearfix">
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-1.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-2.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-3.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-1.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-2.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-3.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-1.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-2.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-3.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-1.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-2.jpg" alt=""></a>
				        				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram/img-3.jpg" alt=""></a>
				        			</div>
				        			<a href="#" class="morePhoto">View more photos</a>
			        			</div>
			        		</div>
			        	</div>
						<div class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?></div>
			        </div>
			    </footer><!--/#footer-->
			    
    <!-- Search Form - Display when click magnify icon in menu -->
    <form action="" id="searchForm">
    	<input type="text" placeholder="Search..." class="form-control searchInput">
    	<i class="mdi mdi-close close"></i>
    </form><!--/-searchForm-->

    <!-- Scroll to top -->
	<a href="#" id="scrollToTop">Go to Top</a>

		</div>
		<!-- /wrapper -->

				<?php wp_footer(); ?>

				<!-- analytics -->
				<script>
				(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
				(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
				l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
				</script>

	</body>
</html>

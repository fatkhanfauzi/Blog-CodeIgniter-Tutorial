<?php $this->load->view('main_header'); ?>

		<div id="featured">
		<div id="featured-top">
		<div id="featured-base">
			<div class="container">
					
				<div id="page-title">
					<h2>Blog <span>You can add your own page description here...</span></h2>
				</div>
			
			</div><!-- close .container -->	
		</div><!-- close #featured-base -->	
		</div><!-- close #featured-top -->
		</div><!-- close #featured -->
		
		<div id="container">
			<div id="content" class="container">
				
				<div class="content-sidebar">
					
					
					<!-- BEGIN BLOG POST -->
					<div class="blog-post">
						
						
						<h2 class="blog-heading"><?php echo $list_single_blog->title_article; ?></h2>
						
						<div class="post-data">
							<span class="date-icon"><?php echo $list_single_blog->date_article; ?></span> 
							<span class="author-icon"><a href="#"><?php echo $list_single_blog->name_user; ?></a></span> 
							<span class="category-icon"><a href="<?php echo site_url('/blog/category/'.$list_single_blog->name_category); ?>"><?php echo $list_single_blog->name_category; ?></a></span>  
							<span class="comments-icon"><a href="#">5 Comments</a></span></div>

						<div class="aligncenter">
							<div class="icon-hover">
								<a href="<?php echo base_url(); ?>asset/images/demo/blog-1.jpg" rel="prettyPhoto" title=""><img src="<?php echo base_url(); ?>asset/images/demo/blog-1.jpg" class="transparency" alt="coastcoast" /></a>
								<div class="icon-zoom">zoom</div>
							</div><!-- close .icon-hover -->
						</div>
						

						<p><?php echo $list_single_blog->content_article ?></p>
						
						<hr>
						
						
						<div id="author_description">
							<img alt="" src="<?php echo base_url('asset/images_uploaded/'.$list_single_blog->ava_user)?>" class="avatar avatar-50 photo" height="50" width="50" />
							<h4>About the Author &ndash; ProgressionStudios</h4>
							<p><?php echo $list_single_blog->info_user ?></p>
						</div><!-- #author-description -->
						
						
						<!-- if comments for blog -->
						<hr>

						<div id="comments">


						</div><!-- #comments -->
						

						
					</div>
					<!-- END BLOG POST -->
					
				</div><!-- close .content-sidebar -->
				
				
				<?php $this->load->view('main_sidebar'); ?>
				
				
			<div class="clearfix"></div>	
			</div><!-- close #content -->
		</div><!-- close #container -->


	</div><!-- close #main -->

<?php $this->load->view('main_footer'); ?>

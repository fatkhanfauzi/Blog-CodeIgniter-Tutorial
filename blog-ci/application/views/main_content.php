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
					
						
						<?php
							foreach($list_blog as $lb){
								echo '
								<div class="blog-post">
								<h2 class="blog-heading"><a href="'.site_url('/blog/article/'.$lb->id_article).'">'.$lb->id_article.'-'.$lb->title_article.'</a></h2>
						
								<div class="post-data">
									<span class="date-icon">'.$lb->date_article.'</span> 
									<span class="author-icon"><a href="#">'.$lb->name_user.'</a></span> 
									<span class="category-icon"><a href="'.site_url('/blog/category/'.$lb->name_category).'">'.$lb->name_category.'</a></span>  
									<span class="comments-icon"><a href="#">5 Comments</a></span>
								</div>

								<div class="aligncenter">
									<div class="icon-hover">
										<a href="'.base_url().'asset/images/demo/blog-4.jpg"  rel="prettyPhoto" title=""><img src="'.base_url().'asset/images/demo/blog-4.jpg" class="transparency" alt="coastcoast" /></a>
										<div class="icon-article">article</div>
									</div><!-- close .icon-hover -->
								</div>
								

								<p>'.$lb->content_article.'.</p>

								<a href="'.site_url('/blog/article/'.$lb->id_article).'" class="button">Read more &rsaquo;</a>
								

								<hr>
								
							</div>
							<!-- END BLOG POST -->
							';	
							}
						?>
						

					
					<?php echo $generate_page; ?>
					
				</div><!-- close .content-sidebar -->
				
				
				<?php $this->load->view('main_sidebar'); ?>
				
				
			<div class="clearfix"></div>	
			</div><!-- close #content -->
		</div><!-- close #container -->


	</div><!-- close #main -->

<?php $this->load->view('main_footer'); ?>

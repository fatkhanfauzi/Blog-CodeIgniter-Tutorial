				<div class="sidebar">
						
					<h3>Categories</h3>
					<ul>
						<?php 
							foreach($list_category as $lc){
								echo '<li><a href="'.site_url('/blog/category/'.$lc->name_category).'">'.$lc->name_category.'</a></li>';
							}
						?>
					</ul>
					<div class="sidebar-spacer"></div>
					
					<h3>Recent Post</h3>
					<ul>
						<?php
						foreach($list_recent_post as $lrc) {
							echo '<li><a href="'.site_url('/blog/article/'.$lrc->id_article).'">'.$lrc->title_article.'</a></li>';
						}
						?>
					</ul>
					<div class="sidebar-spacer"></div>
					
				
				</div><!-- close .sidebar -->
				
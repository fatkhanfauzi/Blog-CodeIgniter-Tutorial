
<footer>
	<div class="footer-container container">
		
		<ul id="footer-navigation">
			<li><a href="./index.php.html">Home</a></li>
			<li><a href="./about.php.html">About us</a></li>
			<li><a href="./portfolio.php.html">Portfolio</a></li>
			<li><a href="./blog.php.html">Blog</a></li>
			<li><a href="./contact.php.html">Contact</a></li>
		</ul>
		<?php 
			$attributes = array('class' => 'searchform');
			echo form_open(site_url('/blog/search'), $attributes); 
		?>
			<label for="s" class="assistive-text">Search</label>
			<input type="text" class="field" name="input_search" id="s" placeholder="Search" />
			<input type="submit" class="submit" name="submit" id="searchsubmit2" value="Search" />
		</form>
		
		
		<div class="clearfix"></div><!-- clearing floats -->
		
		<hr /><!-- DIVIDER -->
		
		<div id="footer-base-right">
			<div class="social-networking-icons">
				<a href="http://www.facebook.com/" target="_blank" class="facebook">Facebook</a>
				<a href="http://www.twitter.com/" target="_blank" class="twitter">Twitter</a>
				<a href="http://dribbble.com/" target="_blank" class="dribbble">Dribbble</a>
				<a href="mailto:no-reply@e-mail.com" class="email">Email</a>

				<!--a href="http://forrst.com" target="_blank" class="forrst">Forrst</a-->

				<!--a href="http://vimeo.com" target="_blank" class="vimeo">Vimeo</a-->

				<!--a href="http://youtube.com" target="_blank" class="youtube">Youtube</a-->

				<!--a href="http://linkedin.com" target="_blank" class="linkedin">linkedin</a-->

				<!--a href="http://www.tumblr.com" target="_blank" class="tumblr">Tumblr</a-->

			</div>
		</div><!-- close #footer-base-right -->
		
		<p>&copy; 2012. Magnolia Template. Designed by <a href="http://progressionstudios.com" target="_blank">Progression Studios</a>.</p>
		
		
		<div class="clearfix"></div>
	</div><!-- close .footer-container -->
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/eye.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/utils.js"></script>
	
	
</footer>
</body>
</html>
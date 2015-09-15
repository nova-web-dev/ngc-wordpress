<div class="cs-footer">
	<div class="container text-center">
		<div class="col-sm-3 dark-footer">
			<?php dynamic_sidebar( 'cs-footer-left-1' ); ?>
		</div>
		<div class="col-sm-3 dark-footer">
			<?php dynamic_sidebar( 'cs-footer-left-2' ); ?>
		</div>
		<div class="col-sm-3 dark-footer">
			<?php dynamic_sidebar( 'cs-footer-right-1' ); ?>
<!-- 			<p>Nova Gaming Community™<br />Somerset West, South Africa<br />Contact us: email@email.co.za</p>
			<br />
			<p>Website created by <a class="light" href="http://www.codelab.io">CODELAB</a></p> -->
		</div>
		<div class="col-sm-3 dark-footer">
			<?php dynamic_sidebar( 'cs-footer-right-2' ); ?>
			<h2>Admin</h2>
			<a href="<?php echo site_url(); ?>/wp-admin" class="light">Admin Login</a>
		</div>
	</div>
</div>
<script src="<?php bloginfo("template_url"); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
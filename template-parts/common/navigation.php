<nav id="nav">
	
	<!-- <ul class="links">
		<li class="active"><a href="index.html">This is Massively</a></li>
		<li><a href="generic.html">Generic Page</a></li>
		<li><a href="elements.html">Elements Reference</a></li>
	</ul> -->
	<?php 

	wp_nav_menu( array(
		'theme_location'     => 'topmenu',
		//'menu_id'            => 'topmenu',
		'menu_class'         => 'links',
		
	) );

 ?>


	<ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
	</ul>
</nav>



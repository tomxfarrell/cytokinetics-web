<?php
/**
 * Default page template
 *
 * @author   TF
 * @version  1.0.0
 * @package  
 */

get_header();
?>
	<article>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		
		</div>
		<?php the_content(); ?>
	</article>
<?php
get_footer();

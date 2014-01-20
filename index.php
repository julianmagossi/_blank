<?php

get_header(); 

?> 
<section class="wbase">
    
    <section class="posts">
		  <?php

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					query_posts(array(
					 'post_type'      => 'post', 
					 'paged'          => $paged,
					 'posts_per_page' => 5
					));

					if ( have_posts() ) : 
					
						while ( have_posts() ) : the_post();

						the_content(); 

						endwhile; 

					 endif; ?>
    </section>
    

</section>

<?php get_footer(); ?>
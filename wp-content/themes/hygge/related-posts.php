		<?php
            query_posts('posts_per_page=6&offset=3');
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
                   <li class="mini-posts">
				        <a href="<?php the_permalink(); ?>" class="tag">
								<h5 class="mini-title"> 
                                <?php echo the_title();  ?> 
                                </h5>
								<?php if( has_post_thumbnail() ):
                                        echo the_post_thumbnail('large', array('class' => 'img-post')); 
                                        endif;?>
				        </a>
				  </li>
				<?php
                endwhile;
			endif; 
                /* END the Loop */
		?>




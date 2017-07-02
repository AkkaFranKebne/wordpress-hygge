
<?php get_header() ?>
	<section id="main-section">
		<main class="main-content">
			<div class="wrapper">

	<div id="content">  
		<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
                   <div class='post-box'>
                    <h2 class="post-title aligncenter">    
                        <a href="<?php the_permalink(); ?>"> 
                                <?php echo the_title();  ?> 
                        </a>     
                    </h2>

                       
                       <?php
                       
                        if( has_post_thumbnail() ):
                            echo the_post_thumbnail('large', array('class' => 'img-post'));  //in css added height: auto
                        endif;                       
                       ?>
                    <p class='main-text'>
                                <?php echo the_content(); ?>
                    </p>

                    </div>
				<?php
        
                endwhile;
        
			endif; 
                /* END the Loop */
		?>
	
	</div><!-- #content -->
 			</div>

		</main>
  
<?php get_sidebar() ?> 
<?php echo get_template_part('related-posts' ); ?>
					</ul>
				</div>
                
                
		</aside>
	</section> 
<?php get_footer() ?>
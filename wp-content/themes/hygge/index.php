
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
				        <p class='aside-text aligncenter'>
				            <a href='#' class='date'> 
                                <?php the_date(); ?>
                            </a>    
                        </p>
                    <h2 class="post-title aligncenter">    
                        <a href="<?php the_permalink(); ?>"> 
                                <?php echo the_title();  ?> 
                        </a>     
                    </h2>
                    <p class='aligncenter'>
		                       <?php echo get_the_category_list(" | ");?>	
                     </p>
                       
                       <?php
                       
                        if( has_post_thumbnail() ):
                            echo the_post_thumbnail('large', array('class' => 'img-post'));  //in css added height: auto
                        endif;                       
                       ?>
                    <p class='main-text'>
                                <?php echo get_the_content(); ?>
                    </p>
                    </div>
				<?php
        
                endwhile;
        
			endif; 
                /* END the Loop */
		?>
	
	</div><!-- #content -->
 			</div>
			<span class="more-text tag alignright">

                <?php posts_nav_link('  ','<- previous posts','more posts ->'); ?> 
            </span>
		</main>
  
<?php get_sidebar() ?> 
<?php echo get_template_part('related-posts' ); ?>
					</ul>
				</div>
                
                
		</aside>
	</section> 
<?php get_footer() ?>




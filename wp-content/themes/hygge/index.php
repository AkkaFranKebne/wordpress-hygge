
<?php get_header() ?>

	<section id="main-section">
		<main class="main-content">
			<div class="wrapper">

	<div id="content">
        
        
		<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();
                   echo "<div class='post-box'>";
				    echo "<p class='aside-text aligncenter'><a href='#' class='date'>"; 
                    the_date(); 
                    echo "</a></p>";
					?>
            
                    <h2 class="post-title aligncenter"><a href="<?php the_permalink(); ?>"> <?php echo the_title();  ?> </a></h2>
            
            
                    <?php
            
                      echo "<p class='aligncenter'>";
		              echo get_the_category_list(" | ");	
                      echo "</p>";
            
                        echo "<p class='main-text'>";
                        echo the_content();
                        echo "</p>";

                    echo "</div>";
				endwhile;
        
			endif; 
                /* END the Loop */
		?>
                
        
       <?php posts_nav_link('<<<<>>>>','POPRZEDNIE','NASTEPNE'); ?> 
	
	</div><!-- #content -->
 			</div>
			<span class="more-text tag alignright">more posts &#10137;</span>
		</main>
		
	</section>   
 <?php get_sidebar() ?>   
<?php get_footer() ?>




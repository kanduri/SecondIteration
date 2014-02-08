<?php get_header(); ?>

<div id="post area"> <!-- Post Area Begins -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div id="post"> <!-- Post begins -->
						<div id="timestamp">
							<table>
								<tr>
									<td><h1><?php the_time('d') ?></h1></td>
									<td> 
										<small>
										<?php the_time('F') ?><br>
										<?php the_time('Y') ?><br>
										</small>
									</td>
									<td width="495">	
										<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
										<p><?php the_author() ?></p>
									</td>
									<td width="40">
										<div id="commentlink" align="center">
										<h3 align="centre" vertical-align="super"><?php comments_popup_link('!', '1', '%'); ?></h3>
										</div>					
									</td>
								</tr>
							</table>						
						</div>
					<div id="posttext">
						<p>
						<?php the_content(); ?>
						</br> 					
						</p>
					<!-- <div id="commentpop">
						<h4><?php comments_popup_link('Comments? &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></h4> 
					</div>	-->
						<HR align="center" width="50%" size="1" color=#f78500 />			
					</div>				
				</div>
				<div class=”comments-template”>
				<?php comments_template(); // Get wp-comments.php template ?>  
				</div>
				<?php endwhile; else: ?>  
    			<h2>Woops...</h2>  
    			<p>Sorry, no posts we're found.</p>    
    			<?php endif; ?>  
			</div>
<!-- End post content -->		

<!-- Display navigation to next/previous pages when applicable -->
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			<div id="secnav">	
			<table>			
			<tr>
			<td width="50%">			
				<h2><?php next_posts_link( __( 'Older Posts') ); ?></2>
			</td>
			<td> <p> | </p> </td>
			<td width="50%">
				<p><?php previous_posts_link( __( 'Newer Posts' ) ); ?></p>
			</td>
			</tr>
			</table>
			</div>
<?php endif; ?>			
</div>

<?php get_footer(); ?>

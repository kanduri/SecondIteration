<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="linkcontent">

<?php get_search_form(); ?>

<h2>Archives:</h2>

<?php
 
// Declare some helper vars
$previous_year = $year = 0;
$previous_month = $month = 0;
$ul_open = false;
 
// Get the posts
$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
 
?>
 
<?php foreach($myposts as $post) : ?>	
 
	<?php
 
	// Setup the post variables
	setup_postdata($post);
 
	$year = mysql2date('Y', $post->post_date);
	$month = mysql2date('n', $post->post_date);
	$day = mysql2date('j', $post->post_date);
 
	?>
 
	<?php if($year != $previous_year || $month != $previous_month) : ?>
 
		<?php if($ul_open == true) : ?>
		</ul>
		<?php endif; ?>
 
		<h3><?php the_time('F Y'); ?></h3>
 
		<ul class="month_archive">
 
		<?php $ul_open = true; ?>
 
	<?php endif; ?>
 
	<?php $previous_year = $year; $previous_month = $month; ?>
 
	<li><span class="the_day"><?php the_time('j'); ?></span> <span class="the_article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
 
<?php endforeach; ?>
	</ul>


</div>
<HR align="center" width="50%" size="1" color=#f78500 />
</div>
<?php get_footer(); ?>

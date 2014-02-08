<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="linkcontent">

<ul>
<?php wp_list_bookmarks(); ?>
</ul>
<HR align="center" width="50%" size="1" color=#f78500 />
</div>
</div>
<?php get_footer(); ?>

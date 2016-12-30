<?php
 /*
 Template Name: Pres celou sirku
* @package AccesspressLite
*/

get_header();
global $post;

 $post_id = $post->ID;

$post_class = get_post_meta( $post_id, 'accesspresslite_sidebar_layout', true );
?>

<div class="cela-sirka-container">

<?php
 if ($post_class=='both-sidebar') { ?>
   <div id="primary-wrap" class="clearfix">
 <?php }
?>
 <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">

     <?php while ( have_posts() ) : the_post(); ?>

       <?php get_template_part( 'content', 'page' ); ?>

       <?php
         // If comments are open or we have at least one comment, load up the comment template
         if ( comments_open() || '0' != get_comments_number() ) :
           comments_template();
         endif;
       ?>

     <?php endwhile; // end of the loop. ?>

   </main><!-- #main -->
 </div><!-- #primary -->

<?php
get_sidebar('left');

 if ($post_class=='both-sidebar') { ?>
   </div>
 <?php }

get_sidebar('right'); ?>
</div>
<?php get_footer(); ?>

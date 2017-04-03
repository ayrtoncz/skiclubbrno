<?php
 /*
 Template Name: Seznam galerií
* @package AccesspressLite
*/

get_header();
global $post, $accesspress_pro_options;
$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
$accesspress_pro_show_breadcrumb = $accesspress_pro_settings['show_breadcrumb'];
$accesspress_pro_enable_prev_next = $accesspress_pro_settings['enable_prev_next'];
$post_class = get_post_meta( $post -> ID, 'accesspress_pro_sidebar_layout', true );
?>

<?php while ( have_posts() ) : the_post(); ?>
	<header class="entry-header">
		<?php
		if ((function_exists('accesspress_pro_breadcrumbs') && $accesspress_pro_show_breadcrumb == 0) || empty($accesspress_pro_show_breadcrumb)) {
			accesspress_pro_breadcrumbs();
		} ?>
		<h1 class="entry-title ak-container"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<div class="ak-container">

	<?php
	if ($post_class=='both-sidebar') { ?>
		<div id="primary-wrap" class="clearfix">
	<?php } ?>

	<div id="primary" class="content-area">

			<?php
      echo "Pokus";
      require_once($_SERVER["DOCUMENT_ROOT"] . "/wp-content/plugins/flickr-justified-gallery/phpFlickr/phpFlickr.php");
      $f = new phpFlickr('65c1fb288257f5405a20cba63b792042','83d808ec18b8463d', true);
      //echo $f->getErrorMsg();
      $galeries = $f->photosets_getList("152912344@N04");
      //echo $f->getErrorMsg();
      foreach($galeries['photoset'] as $photoset){
      print_r ($photoset['id']);
      }
      ?>


			<?php
			if($accesspress_pro_enable_prev_next == 1 ):
			accesspress_pro_post_nav();
			endif
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
		</div><!-- #primary -->

		<?php
		get_sidebar('left');

		if ($post_class=='both-sidebar') { ?>
			</div>
		<?php }

		//get_sidebar('right'); ?>
		</div>
<?php get_footer(); ?>

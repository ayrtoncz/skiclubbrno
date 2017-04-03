<?php
/*
Template Name: Album page
 * @package Accesspress Pro
 */

get_header();
global $post, $accesspress_pro_options;
$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
$accesspress_pro_show_breadcrumb = $accesspress_pro_settings['show_breadcrumb'];
$accesspress_pro_show_comments = $accesspress_pro_settings['show_comments'];
$accesspress_pro_header_image = get_post_meta( $post->ID, 'accesspress_pro_page_header_image', true );
if(is_front_page()){
	$post_id = get_option('page_on_front');
}else{
	$post_id = $post->ID;
}
$post_class = get_post_meta( $post_id , 'accesspress_pro_sidebar_layout', true );
?>

<?php if(!empty($accesspress_pro_header_image)){ ?>
	<div id="header-banner-image">
	<img src="<?php echo esc_url($accesspress_pro_header_image); ?>" alt="Header Image"/>
	</div>
<?php } ?>

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
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
					<!-- Buttons X - Start -->
<center>
<style type="text/css" scoped="">/*4180-start*/
#btnsx-4180{margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px;padding-top:10px;padding-bottom:10px;padding-left:40px;padding-right:40px;}
#btnsx-4180 .btnsx-text-primary{font-size:21px;line-height:21px;font-style:normal;color:#ffffff;padding-top:0px;padding-bottom:0px;padding-left:0px;padding-right:0px;}
#btnsx-4180:hover .btnsx-text-primary{color:#ffffff;}
#btnsx-4180{background-color:#29aecc!important;}
#btnsx-4180:hover{background-color:#259db8!important;}
#btnsx-4180{border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-style:none;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;}
#btnsx-4180:hover{border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-style:none;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;}
#btnsx-4180{-webkit-box-shadow:none;box-shadow:none;}
#btnsx-4180:hover{-webkit-box-shadow:none;box-shadow:none;}
/*4180-end*/
</style>
<a href="/letni-tabor-u-vranovske-prehrady/" id="btnsx-4180" target="_self" class="btnsx-btn">
	<span class="btnsx-text-primary ">Cyklistický tábor 9.-15.7.2017</span></a>

<!-- Buttons X - End -->
<center/>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'accesspress-pro' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
				<?php edit_post_link( __( 'Edit', 'accesspress-pro' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
			</article><!-- #post-## -->

			<?php if($accesspress_pro_show_comments == 1):
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
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

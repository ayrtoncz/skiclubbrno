<?php 
header("Content-type: text/css"); 

$url = dirname( __FILE__ );
$strpos = strpos($url, 'wp-content');
$root = substr($url, 0 , $strpos);

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} else {
	die('/* Error */');
}

global $accesspress_pro_options;
$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
$accesspress_themecolor = $accesspress_pro_settings['theme_color'];
$accesspress_slider_height = $accesspress_pro_settings['slider_height'];
$accesspress_themecolor_hover = colourBrightness($accesspress_themecolor, '-0.9');
$accesspress_themecolor_rgb = hex2rgb($accesspress_themecolor);
?>
<?php if(!empty($accesspress_themecolor)):?>
.site-header.style1 .main-navigation, 
.site-header.style1 .main-navigation,
.socials a:hover,
#action-bar,
.bttn:after,
.site-header.style2 .top-header,
.site-header.style3 .top-header,
.site-header.style4 #main-header,
.featured-post .featured-overlay,
.bttn,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
#sequence .more-link,
.bx-wrapper .slider-caption .more-link,
#slider-banner .bx-wrapper .bx-pager.bx-default-pager a:after,
#slider-banner .bx-wrapper .bx-controls-direction a,
#bottom-bar-section,
.ap_toggle .ap_toggle_title:after,
#ak-top,
.ap-pricing-head,
.woocommerce .price-cart:after,
.woocommerce ul.products li.product .price-cart .button:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button,
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt,
.woocommerce ul.products li.product .onsale,
.woocommerce span.onsale,
nav.woocommerce-MyAccount-navigation ul li a {
    background-color:<?php echo $accesspress_themecolor; ?>;
}

.site-header.style1 .main-navigation .current_page_item a, 
.site-header.style1 .main-navigation .current-menu-item a, 
.site-header.style1 .main-navigation li:hover > a,
.event-thumbnail .event-date,
.portfolio-listing.portfolio_grid .portfolios-bg,
.site-header.style2 .socials a:hover,
.site-header.style3 .socials a:hover,
.site-header.style3 .main-navigation .menu > ul > li.current_page_item > a, 
.site-header.style3 .main-navigation .menu > ul > li.current-menu-item > a, 
.site-header.style3 .main-navigation .menu > ul > li.current-menu-ancestor > a,
.site-header.style3 .main-navigation .menu > ul > li:hover > a,
.site-header.style4 .top-header,
.site-header.style4 .main-navigation .menu > ul > .current_page_item a, 
.site-header.style4 .main-navigation .menu > ul > .current-menu-item a, 
.site-header.style4 .main-navigation .menu > ul > li.current-menu-ancestor > a,
.site-header.style4 .main-navigation .menu > ul > li:hover > a,
.bttn:hover,
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
.ap-progress-bar .ap-progress-bar-percentage,
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover,
.woocommerce #respond input#submit.alt.disabled, 
.woocommerce #respond input#submit.alt.disabled:hover, 
.woocommerce #respond input#submit.alt:disabled, 
.woocommerce #respond input#submit.alt:disabled:hover, 
.woocommerce #respond input#submit.alt[disabled]:disabled, 
.woocommerce #respond input#submit.alt[disabled]:disabled:hover, 
.woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, 
.woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, 
.woocommerce a.button.alt[disabled]:disabled, 
.woocommerce a.button.alt[disabled]:disabled:hover, 
.woocommerce button.button.alt.disabled, 
.woocommerce button.button.alt.disabled:hover, 
.woocommerce button.button.alt:disabled, 
.woocommerce button.button.alt:disabled:hover, 
.woocommerce button.button.alt[disabled]:disabled, 
.woocommerce button.button.alt[disabled]:disabled:hover, 
.woocommerce input.button.alt.disabled, 
.woocommerce input.button.alt.disabled:hover, 
.woocommerce input.button.alt:disabled, 
.woocommerce input.button.alt:disabled:hover, 
.woocommerce input.button.alt[disabled]:disabled, 
.woocommerce input.button.alt[disabled]:disabled:hover,
nav.woocommerce-MyAccount-navigation ul li:hover a,
nav.woocommerce-MyAccount-navigation ul li.is-active a{ 
    background-color: <?php echo $accesspress_themecolor_hover; ?>;
}

a,
.header-text,
.socials a,
.featured-post.big-icon h2.has-icon .fa,
ul.button-group li.is-checked,
.event-button li.is-checked,
.site-header.style2 .main-navigation li:hover > a, 
.site-header.style3 .main-navigation li:hover > a,
.site-header.style2 .main-navigation ul ul li:hover > a, 
.site-header.style3 .main-navigation ul ul li.current-menu-item > a,
.vertical .ap_tab_group .tab-title.active, 
.vertical .ap_tab_group .tab-title.hover,
.horizontal .ap_tab_group .tab-title.active, 
.horizontal .ap_tab_group .tab-title.hover,
.entry-footer a:hover,
.main-navigation ul ul a:hover,
.sidebar .all-testimonial,
.woocommerce .woocommerce-message:before,
.woocommerce div.product p.price ins, 
.woocommerce div.product span.price ins, 
.woocommerce div.product p.price del,
.woocommerce .woocommerce-info:before,
#action-bar .action-bar-button:hover,
.style1 .header-text a{
    color:<?php echo $accesspress_themecolor; ?>;
}

.sidebar .widget_recent_comments .url:hover,
.sidebar ul li a:hover,
a:hover, a:active,
#accesspreslite-breadcrumbs a:hover{
    color: <?php echo $accesspress_themecolor_hover; ?>;
}

.searchform,
.socials a,
.featured-post.big-icon h2.has-icon .fa,
.sidebar h3.widget-title span:after,
.site-header.style4 .search-icon,
.event-listing.event_list .event-short-desc,
#clients-logo h2:after,
.vertical .ap_tab_group .tab-title.active:after, 
.vertical .ap_tab_group .tab-title:hover:after,
.vertical .tab-title,
.horizontal .ap_tab_group .tab-title.active:after, 
.horizontal .ap_tab_group .tab-title:hover:after,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message,
.woocommerce form .form-row.woocommerce-validated .select2-container, 
.woocommerce form .form-row.woocommerce-validated input.input-text, 
.woocommerce form .form-row.woocommerce-validated select,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
.woocommerce div.product .woocommerce-tabs ul.tabs:before {
    border-color:<?php echo $accesspress_themecolor; ?>;
}

#sequence .more-link,
.bx-wrapper .slider-caption .more-link{
border-color:<?php echo $accesspress_themecolor_hover; ?>;
}

.event-listing.event_list .event-short-desc:after{
    border-color:transparent <?php echo $accesspress_themecolor; ?> transparent transparent;
}

.vertical .ap_tab_group .tab-title.active:before, 
.vertical .ap_tab_group .tab-title:hover:before{
    border-color:transparent transparent transparent <?php echo $accesspress_themecolor; ?>
}

.horizontal .ap_tab_group .tab-title.active:before, 
.horizontal .ap_tab_group .tab-title:hover:before,
.ap-pricing-head:after{
    border-color:<?php echo $accesspress_themecolor; ?> transparent transparent
}

#slider-banner .bx-wrapper .bx-pager.bx-default-pager a{
    box-shadow: 0 0 0 2px <?php echo $accesspress_themecolor; ?> inset;
}

#sequence .title span,
#sequence .subtitle span{
    background: rgba(<?php echo $accesspress_themecolor_rgb[0].','.$accesspress_themecolor_rgb[1].','.$accesspress_themecolor_rgb[2]; ?>,0.6)
}

#sequence{
    height:<?php echo "$accesspress_slider_height"; ?>px !important;
}

<?php endif; ?>
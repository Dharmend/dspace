<?php
global $base_url;
?>
<!---************** Header area start here *****************-->
<header>
  <?php print render($page['header_top']);?>
      <!--Top-Header Section end-->
  <div class="wrapper header-wrapper">
      <div class="container header-container">
            <h1 class="logo">
               <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><strong>अंतरिक्ष विभाग</strong> 
         <span class="dp_name">Department of</span>
        <span>Space</span> </a>              
               
              <?php endif; ?>
              </h1>
            <a href="javascript:void(0);" class="toggle-nav-bar">
            <span class="menu-icon"></span>
            <span class="menu-text">Menu</span>
        </a>
        <div class="header-right clearfix">
            <div class="right-content clearfix">
                <div class="float-element swach-bharat-img">
				  <a href="http://www.isro.gov.in" target="_blank" title="Indian Space Research Organisation - External link that open in new window"> <img src="<?php echo $base_url;?>/sites/all/themes/cmf/images/logo-right.jpg" alt="Indian Space Research Organisation" class="header__logo-image" /></a>
                  <a target="_blank" href="http://swachhbharat.mygov.in/" title="Swachh Bharat, External link that open in a new window"><div class="swatchbharatimg"></div></a>
					
                </div>
            </div>
        </div>
    </div>
  </div>
</header>

<!--**************** Header area end here *********************-->
<div class="nav-banner-wrapper">
  <nav class="wrapper nav-wrapper">
    <div class="container nav-container">
        <!--Main nav goes here-->
           <?php if ($main_menu): ?>
                <div id="main-menu">
                    <?php $block = module_invoke('menu_block', 'block_view', 2);
                      print render($block['content']);
                    ?>
                </div>
            <?php endif; ?>
      </div>
  </nav>
<div class="wrapper banner-wrapper">
      <?php print render($page['homeslider-portion']);?>
</div>
</div>

<!--*********Content wrapper start here *********************-->
<div id="skipCont" class="wrapper"></div>
<div id="fontSize" class="wrapper body-wrapper">
<div class="bg-wrapper bg-grey main-links">
<div class="container">

<div class="link-icons row">
  <?php print render($page['home_link_middle_blocks']);?>
</div>

</div>
</div>

<div class="bg-wrapper">
  <?php print render($page['home_middle_blocks']);?>
</div>
<div class="bg-wrapper wrapper mid-container">
    <div class="left-mid-bg"></div>
    <div class="gallery-container">
    	
        <div class="gallery">
			  <?php print render($page['home_gallery_blocks']);?>
          </div>
    </div>
	<div class="container mid-container">
    
    	<div class="mission clearfix">
        <?php print render($page['home_mission_blocks']);?>
        </div>
    	<div class="gallery-icons">
        <div class="link-icons">
		<?php print render($page['home_link_right_blocks']);?>
        </div>
		
        </div>
    </div>
</div>
 
</div><!--/.body-wrapper-->


<div class="bg-wrapper">
  <div class="container body-comntainer">
    <div class="main_content">
      <div class="home-rightportion">
        <?php if ($page['sidebar_first']): ?>
          <div id="sidebar-first" class="column sidebar"><div class="section">
            <?php print render($page['sidebar_first']); ?>
          </div></div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>
      </div>
      <div class="home-leftportion">
        <div class="left_row1">
        <div id="content" class="righttabbing" role="main">
          <?php if ($breadcrumb): ?>
            <div id="breadcrumb"><?php print $breadcrumb; ?></div>
          <?php endif; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
              <?php print html_entity_decode($messages); ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>
          
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
          <ul class="action-links"><?php //print render($action_links); ?></ul>
          <?php endif; ?>
          
        </div>
        <?php if ($page['sidebar_second']): ?>
          <div id="sidebar-second" class="left_menu sidebar"><div class="section">
            <?php print render($page['sidebar_second']); ?>
          </div></div> <!-- /.section, /#sidebar-second -->
        <?php endif; ?>
        </div>
        <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
        <div class="left_row2">
          <ul>
            <li> <?php print render($page['triptych_first']); ?></li>
            <li><?php print render($page['triptych_middle']); ?></li>
            <li><?php print render($page['triptych_last']); ?></li>
          </ul>
        </div>
        <?php endif; ?>
      </div>
      </div>
  </div>
</div>

<?php if ($page['featured']): ?>
    <div class="wrapper carousel-wrapper">
      <div class="container carousel-container">
        <div id="flexCarousel" class="flexslider carousel">
          <?php print render($page['featured']); ?>
        </div>
      </div>
    </div>
<?php endif; ?>

<!--*********Content wrapper end here *********************-->

<!--*******Footer area start here ********************-->

<?php if ($page['footer']): ?>
   <?php print render($page['footer']); ?>
<?php endif; ?>

<!--*********Footer area end here *********************-->

<!--**********Inline javascript end here *********************-->
<script type="text/javascript">
jQuery(window).load(function(){
// Slider						
 jQuery('#flexSlider').flexslider({
        animation: "slide",
		controlNav: true,
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
 });
 
  jQuery('#gallery').flexslider({
        animation: "slide",
		controlNav: false,
		pausePlay: true,
		//pauseText: 'Pause',
		//playText: 'Play',
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
 });
 
 
 
  jQuery('#contSlider1').flexslider({
        animation: "slide",
		controlNav: false,
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
 });
    jQuery('#contSlider2').flexslider({
        animation: "slide",
		controlNav: false,
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
 });
 
// Carousel						
 jQuery('#flexCarousel').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 200,
        itemMargin: 5,
        minItems: 2,
        maxItems: 6,
		slideshow: 1,
		pausePlay: true,
		move: 1,
		controlNav: false,
        start: function(slider){
          jQuery('body').removeClass('loading');
		  if (slider.pagingCount === 1) slider.addClass('flex-centered');
        }
      });
 
 // Gallery
      jQuery('#galleryCarousel').flexslider({
        animation: "fade",
        controlNav: "thumbnails",
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });
  });
</script>
<noscript>Your browser does not support JavaScript!</noscript>

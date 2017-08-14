<?php
  global $base_url;
?>
  <header>
    <div class="accessibility_top_nav">
      <div class="wrapper">
        <?php print render($page['header_top']);?>
      </div>
    </div>

    <!--Top-Header Section end-->
    <section class="wrapper header-wrapper">
        <div class="container header-container">
            <div class="logo">
               <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><strong>अंतरिक्ष विभाग</strong> 
         <span class="dp_name">Department of</span>
        <span>Space</span> </a>               
               
              <?php endif; ?>
              </div>
              <a href="javascript:void(0);" class="toggle-nav-bar">
              <span class="menu-icon"></span>
              <span class="menu-text">Menu</span>
          </a>
          <div class="header-right clearfix">
              <div class="right-content clearfix">
                  <div class="float-element swach-bharat-img">
                    <a href="http://www.isro.gov.in" target="_blank" title="Indian Space Research Organisation - External link that open in new window">  <img src="<?php echo $base_url;?>/sites/all/themes/cmf/images/logo-right.jpg" alt="Indian Space Research Organisation" class="header__logo-image" /></a>
                    <a target="_blank" href="http://swachhbharat.mygov.in/" title="Swachh Bharat, External link that open in a new window"><div class="swatchbharatimg"></div></a>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!--Header Section end here-->

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
		      <?php //print render($page['homeslider-portion']);?>
		</div>
</div>

<!--*********Content wrapper start here *********************--> 
  
  <div id="skipCont" class="wrapper"></div>


  <!--Container Section Start Here -->
  <section class="wrapper body-wrapper " id="fontSize" style="font-size: 100%;">
    <div class="bg-wrapper inner-body-wrapper">
      <div class="container body-container">
       <?php print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?>
            <div id="breadcrumb" class="breadcam">
			<?php print html_entity_decode(render($page['highlighted']));
			?>
            </div>
          <?php endif; ?>
          <?php if ($page['sidebar_first']): ?>
          
            <div id="sidebar-first" class="column sidebar"><div class="section">
            <label for="show-menu" class="show-menu">MENU</label>
            <input type="checkbox" id="show-menu" role="button">
              <?php print render($page['sidebar_first']); ?>
            </div></div> <!-- /.section, /#sidebar-first -->
          <?php endif; ?>
          <?php 
            if ($page['sidebar_first']){
              $content_class="rightportion";
            }else{
              $content_class="";
            }
          ?>
          <div id="content" class="<?php echo $content_class; ?>" role="main">      
            <a id="main-content"></a>
            <?php //print $breadcrumb; ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
             <div id = "page-title"><h1 class="heading"><span><?php print t($title); ?></span></h1></div>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($messages): ?>
              <div id="messages"><div class="section clearfix">
                <?php print html_entity_decode($messages); ?>
              </div></div> <!-- /.section, /#messages -->
            <?php endif; ?>
            <?php if ($page['featured']): ?>
              <div id="featured"><div class="section clearfix">
                <?php print render($page['featured']); ?>
              </div></div> <!-- /.section, /#featured -->
            <?php endif; ?>
            
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print cmf_preset_external_links(render($page['content'])); ?>
          <?php print $feed_icons; ?>
          </div>

          <div id="navigation">
            <?php print render($page['navigation']); ?>
          </div>

          <?php if ($page['sidebar_second']): ?>
            <div id="sidebar-second" class="column sidebar"><div class="section">
              <?php print render($page['sidebar_second']); ?>
            </div></div> <!-- /.section, /#sidebar-second -->
          <?php endif; ?>
      </div>
    </div>
  </section>

  <!--<footer>-->
     <?php print render($page['footer']); ?>
  <!--</footer>-->
  <script>
    //<![CDATA[
jQuery(function ()
{
  jQuery('table').wrap('<div class="scroll-table"></div>');
  jQuery(".scroll-table").after( "<div class='guide-text'>Swipe to view <i class='fa fa-long-arrow-right'></i></div>" );

});
//]]>
  </script>
<noscript>Your browser does not support JavaScript!</noscript>

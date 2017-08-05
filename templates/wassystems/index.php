<?php    
    
/**    
    
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.    
    
 * @license		GNU/GPL, see LICENSE.php    
    
 * Joomla! is free software. This version may have been modified pursuant    
    
 * to the GNU General Public License, and as distributed it includes or    
    
 * is derivative of works licensed under the GNU General Public License or    
    
 * other free or open source software licenses.    
    
 * See COPYRIGHT.php for copyright notices and details.    
    
 */    
    
    
    
// no direct access    
    
defined( '_JEXEC' ) or die( 'Restricted access' );    
    
?>   
<html> 
<head>    
<jdoc:include type="head" />    
    
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/wassystems/css/templates.css" type="text/css" />    
<script src="<?php echo $this->baseurl ?>/templates/wassystems/js/jquery.js" type="text/javascript"></script>    
<script src="<?php echo $this->baseurl ?>/templates/wassystems/js/jquery.cycle.js" type="text/javascript"></script>    
<script type="text/javascript">    
    
jQuery(function() {    
    
    jQuery('#slideshow').cycle({     
    
        fx:     'fade',     
    
        timeout: 7500,    
    
        speed: 1000,    
    
        pause:       1,    
    
        //autostop:    1,    
    
        pager:      '#nav'    
    
     });    
    
});    
     
</script>    
<script type="text/javascript">    
		jQuery.noConflict();    
</script>     
</head>    
<body>    
<div id="main-container">    
  <div id="top-bg"></div>    
  <div id="inner-content">    
    <div id="header">     
      <div id="logo"><img src="<?php echo $this->baseurl; ?>
/templates/wassystems/images/wass_logo_1.png" />    
        <?php /*?><div id="call"><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/phonecall.jpg" /> </div><?php */?>    
      </div>    
      <div id="menu">    
        <jdoc:include type="modules" name="menu" />    
      </div>    
    </div>    
    <div id="middle-top">    
      <div>    
        <div id="middle">    
          <div id="pager">    
            <div id="nav"></div>    
          </div>    
          <div class="banner">    
            <ul id="slideshow">    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-growth.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-solution.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-web-design.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-graphic-design.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-e-commerce.jpg"/></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-web-hosting.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-about-us.jpg"/></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-services-us_1.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-services-us.jpg" /></li>    
              <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/banner-contact-us.jpg"/></li>    
            </ul>    
          </div>    
        </div>    
        <div>    
          <jdoc:include type="modules" name="homemiddle"/>    
        </div>    
      </div>    
      <div class="m-bottomcontent">    
        <jdoc:include type="component" />    
        <div class="m-rightcontent">    
		    
          <jdoc:include type="modules" name="service"/>    
		  <!-- <jdoc:include type="modules" name="quote"/>-->    
        </div>    
      </div>    
      <jdoc:include type="modules" name="clients"/>    
    </div>    
    <div><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/bottom-image.jpg" /></div>    
  </div>    
  <div class="footer">    
    <div class="footer-image">    
      <div>    
        <ul>    
          <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/php.jpg" /></li>    
          <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/mysql.jpg" /></li>    
          <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/joomla.jpg" /></li>    
          <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/drupal.jpg" /></li>    
          <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/wordpress.jpg" /></li>    
          <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/oscommerce.jpg" /></li>    
		  <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/inter.png" /></li>    
		   <li><img src="<?php echo $this->baseurl ?>/templates/wassystems/images/pestashop.jpg" /></li>    
        </ul>    
      </div>    
      <div class="bottom-menu">    
        <div>    
          <jdoc:include type="modules" name="footer"/>    
        </div>    
        <div class="bottom-content">&#64; Copyright 2011. Web Arts. All Rights Reserved</div>    
      </div>    
    </div>    
    <!--<div class="bottom-content">© Copyright 2011. Web Arts. All Rights Reserved</div>-->    
  </div>    
</div>    
<jdoc:include type="modules" name="debug" />    
</body>    
</html>    
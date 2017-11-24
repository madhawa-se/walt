<?php

/**
 * @file
 * Displays a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   element.
 * - $head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the
 *   current path, whether the user is logged in, and so on.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled in
 *   theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been
 *   disabled in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been
 *   disabled.
 * - $primary_links (array): An array containing primary navigation links for
 *   the site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links
 *   for the site, if they have been configured.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $content: The main content of the current Drupal page.
 * - $right: The HTML for the right sidebar.
 * - $node: The node object, if there is an automatically-loaded node associated
 *   with the page, and the node ID is the second argument in the page's path
 *   (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic
 *   content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
 $mobile_banner_image = $node->field_mobile_image_banner[0]['view'];
 
 $color_box_cta_one = $node->field_color_box_cta_1[0]['value'];
 $color_hover_txt_one = $node->field_color_box_hover_txt1[0]['value'];
 $color_link_txt_one = $node->field_color_box_link_txt1[0]['value'];
 $color_box_link_one = $node->field_color_box_link1[0]['view'];
 
 $color_box_cta_two = $node->field_color_box_cta_2[0]['value'];
 $color_hover_txt_two = $node->field_color_box_hover_txt2[0]['value'];
 $color_link_txt_two = $node->field_color_box_link_txt2[0]['value'];
 $color_box_link_two = $node->field_color_box_link2[0]['view'];
 
 $color_box_cta_three = $node->field_color_box_cta_3[0]['value'];
 $color_hover_txt_three = $node->field_color_box_hover_txt3[0]['value'];
 $color_link_txt_three = $node->field_color_box_link_txt3[0]['value'];
 $color_box_link_three= $node->field_color_box_link3[0]['view'];
 
 $color_box_cta_four = $node->field_color_box_cta_4[0]['value'];
 $color_hover_txt_four = $node->field_color_box_hover_txt4[0]['value'];
 $color_link_txt_four = $node->field_color_box_link_txt4[0]['value'];
 $color_box_link_four= $node->field_color_box_link4[0]['view'];
 
 $main_content_cta_link = $node->field_cta_link_content1[0]['view'];
 $main_content_cta_txt = $node->field_cta_link_txt_content1[0]['value'];
 $main_content_img = $node->	field_image_content[0]['view'];
 $main_content_img_txt = $node->field_image_content_text[0]['value'];
 $main_content_profile_name = $node->field_profile_name[0]['value'];
 $main_content_job_title = $node->field_profile_job_title[0]['value'];
 
 if($main_content_img){
    $adclass = 'col-sm-7 width-image';
  }
 
 $secondary_content = $node->field_content_content_2[0]['value'];
 $second_content_cta_link = $node->field_cta_link_content_2[0]['view'];
 $second_content_cta_link_text = $node->field_cta_link_txt_content_2[0]['value'];
 $second_content_img = $node->field_image_content_2[0]['view'];
 $second_content_youtube_url = $node->	field_youtube_content_2[0]['value'];
 

 
 $feature_heading = $node->field_heading_featured[0]['value'];
 
 $heading_feature_one = $node->field_heading_featured_1[0]['value'];
 $strapline_feature_one = $node->field_strapline_featured_1[0]['value'];
 $cta_link_feature_one= $node->field_cta_link_featured_1[0]['view'];
 $cta_link_txt_feature_one = $node->field_cta_link_txt_featured_1[0]['value'];
 
 $heading_feature_two = $node->field_heading_featured_2[0]['value'];
 $strapline_feature_two = $node->field_strapline_featured_2[0]['value'];
 $cta_link_feature_two= $node->field_cta_link_featured_2[0]['view'];
 $cta_link_txt_feature_two = $node->field_cta_link_txt_featured_2[0]['value'];
 
 $heading_feature_three = $node->field_heading_featured_3[0]['value'];
 $strapline_feature_three = $node->field_strapline_featured_3[0]['value'];
 $cta_link_feature_three= $node->field_cta_link_featured_3[0]['view'];
 $cta_link_txt_feature_three = $node->field_cta_link_txt_featured_3[0]['value'];
 
 $heading_feature_four = $node->field_heading_featured_4[0]['value'];
 $strapline_feature_four = $node->field_strapline_featured_4[0]['value'];
 $cta_link_feature_four = $node->field_cta_link_featured_4[0]['view'];
 $cta_link_txt_feature_four = $node->field_cta_link_txt_featured_4[0]['value'];
 
 $cta_banner_heading = $node->field_heading_cta_banner[0]['value'];
 $cta_banner_strapline = $node->field_strapline_cta_banner[0]['value'];
 $cta_banner_link = $node->field_cta_link_cta_banner[0]['view'];
 $cta_banner_link_txt = $node->field_cta_link_txt_cta_banner[0]['value'];
 
 $content_feature_cb = $node->field_content_feature_cb[0]['value'];
 $cta_link_feature_cb = $node->field_cta_link_feature_cb[0]['view'];
 $cta_text_feature_cb = $node->field_cta_text_feature_cb[0]['value'];
 $images_feature_cb = $node->field_images_feature_cb[0]['value'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200i,300,400,700,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>">

<!---- mobile menu ------>
<nav id="primary-links" class="navbar navbar-default mobile-menu visible-xs" role="navigation">
    <div class="container">
      <div class="row">
        <div class="navbar-header"<?php print $mobile_nav_bg; ?>>
        <div class="mobile-menu-top">
        <div class="mobile-logo clearfix pull-left">
          <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?> home" class="navbar-brand visible-xs">
              <?php if ($mobile_logo == TRUE) { ?>
                <img src="/<?php print $mobile_logo_path; ?>" alt="<?php print $site_name; ?> logo">
              <?php } else { ?>
                <img src="<?php print base_path().path_to_theme();?>/images/mobile-logo.png" alt="<?php print $site_name; ?> logo">
              <?php }; ?>          
              </a>
        </div>
          
        <div class="mobile-menu-button clearfix">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <div class="pull-left menu-icon">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </div>
            </button>
        </div>
        </div>
        <div class="mobile-menu-bottom">
         <a href="/contact" class="mobile-icon"><i class="fa fa-map-marker"></i><span class="hidn-txt">map</span></a>
         <a href="tel:<?php print $company_phone; ?>"  class="phone mobile-icon"><i class="fa fa-phone"></i><span class="hidn-txt">Contact us</span></a>
         <a data-toggle="modal" href="#modalsearch" class="mobile-icon"><i class="fa fa-search"></i><span class="hidn-txt">search</span></a>
        </div>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="visible-xs navbar-utilities">
            <?php if ($logged_in) { ?>
              <?php if ($is_admin) ?><a class="btn btn-default" href="/admin">Admin</a>
            <a class="btn btn-default" href="/user">Profile</span></a>
            <a class="btn btn-default" href="/logout">Logout</span></a>
            <?php } else { ?>
            <a class="btn btn-default" href="/user/login">Login</a>
            <a class="btn btn-default" href="/user/register">Register</a>
            <?php } ?>
          </div>
	    <?php print theme('links', $primary_links, array('class' => 'nav navbar-nav'), 'primary-links'); ?> 
        </div>
          </div>
      </div>
    </div>
  </nav> <!-- end mobile menu -->

  <div class="top-header hidden-xs">
    <div class="container">
     <div class="pull-left phone">
         <a href="tel:<?php print $company_phone; ?>"  class="phone"><?php print $company_phone; ?></a>
     </div>
     
     <?php if (!empty($top_header)): ?>
          <?php print $top_header; ?>
      <?php endif; ?>
    </div>
  </div>
  <!-- main navigation-->
  <div id="navigation" class="main-navi hidden-xs">
      <div class="container">
          <div  class="menu <?php if (!empty($primary_links)) { print "withprimary"; } if (!empty($secondary_links)) { print " withsecondary"; } ?> ">
        <?php if (!empty($primary_links)): ?>
          <div id="primary" class="clear-block">
            <div class="navi-logo border-right pull-left"><?php if (!empty($logo)): ?>
          <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?> Home" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?> Home" />
          </a>
        <?php endif; ?></div>
            <div class="primary-navi border-right pull-left"><?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?></div>
            <div class="navigation-contact border-right pull-left">
             <a href="/contact" class="map"><i class="fa fa-map-marker" aria-hidden="true"></i><span Class="hidn-txt">find us</span></a>
            </div>
            <div class="navigation-contact border-right pull-left">
              <a href="tel:<?php print $company_phone; ?>"  class="phone"><i class="fa fa-phone"></i><span Class="hidn-txt">Contact us</span></a></div>
            <div class="navigation-contact border-right pull-left">
             <a data-toggle="modal" href="#modalsearch"><i class="fa fa-search"></i><span class="hidn-txt">search</span></a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div> <!--/main navigation-->
 
   <div id="header" class="header hidden-xs">
    <div class="container">   
            
      <?php if (!empty($header_top)): ?>
        <div id="headertop-region" class="pull-right">
          <?php print $header_top; ?>
        </div>
      <?php endif; ?>
      </div>
      </div>
    </div> <!-- /header -->
    
 <!--   front slide show-->
  <div id="front-slideshow" class="front-slideshow ul-no-style carousel slide hidden-xs" data-ride="carousel" data-interval="8000">
     <?php if ($node->field_slide_banner[0][nid] != NULL): ?>
     
     <ul class="carousel-inner">
      
                <?php if ($node->field_slide_banner[0][nid]): ?>
                <li class="item active">
                    <?php print views_embed_view('front_slides','block_1',$node->field_slide_banner[0][nid]); ?>
                    </li>
                <?php endif; ?>
                
                <?php if ($node->field_slide_banner[1][nid]): ?>
                <li class="item">
                    <?php print views_embed_view('front_slides','block_1',$node->field_slide_banner[1][nid]); ?>
                </li>
                <?php endif; ?>
                
                <?php if ($node->field_slide_banner[2][nid]): ?>
                <li class="item">
                    <?php print views_embed_view('front_slides','block_1',$node->field_slide_banner[2][nid]); ?>
                </li>
                <?php endif; ?>
        
                <?php if ($node->field_slide_banner[3][nid]): ?>
                <li class="item">
                    <?php print views_embed_view('front_slides','block_1',$node->field_slide_banner[3][nid]); ?>
                    </li>
                <?php endif; ?>
               </ul>
                  <!-- Indicators -->
           <div class="container position-r">
           <ol class="carousel-indicators hidden-xs">
             <li data-target="#front-slideshow" data-slide-to="0" class="active">
              <div class="color-box-one color-box border-radius">
                     <?php
                        if($color_box_cta_one)
                        print "<div class= 'cta-txt'>";
                          print "$color_box_cta_one";
                        print "</div>";
                        
                        print "<div class = 'hidden-txt'>";
                          if($color_hover_txt_one)
                          print "<p class ='hover-txt'>";
                            print "$color_hover_txt_one";
                          print "</p>";
                          
                          print "<a href= '$color_box_link_one' class= 'link-txt'>";
                            if($color_link_txt_one)
                            print "<span>";
                              print "$color_link_txt_one";
                              print "</span>";
                            print "</a>";
                          print "</div>";
                      ?>
                </div>
             </li>
             <li data-target="#front-slideshow" data-slide-to="1">
              <div class="color-box-two color-box border-radius">
                     <?php
                        if($color_box_cta_two)
                        print "<div class= 'cta-txt'>";
                          print "$color_box_cta_two";
                        print "</div>";
                        
                        print "<div class = 'hidden-txt'>";
                          if($color_hover_txt_two)
                          print "<p class ='hover-txt'>";
                            print "$color_hover_txt_two";
                          print "</p>";
                          
                          print "<a href= '$color_box_link_two' class= 'link-txt'>";
                            if($color_link_txt_two)
                            print "<span>";
                              print "$color_link_txt_two";
                              print "</span>";
                            print "</a>";
                          print "</div>";
                      ?>
                </div>
             </li>
             <li data-target="#front-slideshow" data-slide-to="2">
              <div class="color-box-three color-box border-radius">
                     <?php
                        if($color_box_cta_three)
                        print "<div class= 'cta-txt'>";
                          print "$color_box_cta_three";
                        print "</div>";
                        
                        print "<div class = 'hidden-txt'>";
                          if($color_hover_txt_three)
                          print "<p class ='hover-txt'>";
                            print "$color_hover_txt_three";
                          print "</p>";
                          
                          print "<a href= '$color_box_link_three' class= 'link-txt'>";
                            if($color_link_txt_three)
                            print "<span>";
                              print "$color_link_txt_three";
                              print "</span>";
                            print "</a>";
                          print "</div>";
                      ?>
                   </div>
             </li>
            <li data-target="#front-slideshow" data-slide-to="3">
             <div class="color-box-four color-box border-radius">
                     <?php
                        if($color_box_cta_four)
                        print "<div class= 'cta-txt'>";
                          print "$color_box_cta_four";
                        print "</div>";
                        
                        print "<div class = 'hidden-txt'>";
                          if($color_hover_txt_four)
                          print "<p class ='hover-txt'>";
                            print "$color_hover_txt_four";
                          print "</p>";
                          
                          print "<a href= '$color_box_link_four' class= 'link-txt'>";
                            if($color_link_txt_four)
                            print "<span>";
                              print "$color_link_txt_four";
                              print "</span>";
                            print "</a>";
                          print "</div>";
                      ?>
                   </div>
            </li>
           </ol>
           </div>
          </div>

      <?php endif; ?><!--/front slide show-->
      

   
   
   <!-- mobile banner image-->
   <div class="mobile-banner visible-xs">
     <?php
      if($mobile_banner_image)
      print "<div class= 'mobile-banner-img'>";
      print " $mobile_banner_image";
      print "</div>";
     ?>
   </div>
   
 
 <div class="addthis-icon pull-right">
  <?php
   if($addthis_icon)
   print "$addthis_icon";
   ?>
   <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_follow_toolbox_r87n"></div>
 </div>
    
  <div id="page" class="container test">
    <div id="container" class="clear-block clear-both">
      <div id="main" class="front-content column"><div id="main-squeeze">
        <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
   <div class="row">
        <div id="content" class="main-content col-xs-12  <?php print $adclass ?>">
          <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>
          <div id="content-content" class="clear-block">
            <?php print $content; ?>
          </div> <!-- /content-content -->
          <div class="link-btn">
           <?php
           print "<a href = '$main_content_cta_link'>";
            if($main_content_cta_txt)
            print "$main_content_cta_txt";
            print "</a>";
           ?>
          </div>
          
          <?php print $feed_icons; ?>
        </div> <!-- /content -->
        
        <div class="col-sm-5">
           <?php
             if($main_content_img){
              print "<div class= 'content-image hidden-xs'>";
               print "$main_content_img";
               print "<p>";
               print $main_content_profile_name;
               print "</p>";
               print "<p>";
               print $main_content_job_title;
               print "</p>";
              print "</div>";
             }
           ?>
        </div>
      </div>
      </div>
     </div><!-- /main-squeeze /main -->
 </div> <!-- /page -->
  </div>
  
 <!-- secondary content -->
  <!--<div class="secondary-content clear-both">
   <div class="container">
    <div class="second-content-inner">
     <div class="row">-->
      <?php
      //if($second_content_youtube_url) {
      // ?>
     <!-- <div class="col-sm-5 hidden-xs">-->
          <?php
      //  print "<a href='' data-toggle = 'modal' data-target='#democlient'>";
      //   if($second_content_img)
      //   print "$second_content_img";
      //  print "</a>";
      //?>
      <!--video modal-->
      <!--<div id="democlient" class="video-modal modal fade">
       <div class="modal-dialog modal-lg">
        <div class="modal-content">-->
         <?php
         //  if($second_content_youtube_url)
         //   print "$second_content_youtube_url";
         //?>
        <!-- <button class="close" type="button" data-dismiss="modal"></button>
        </div>
       </div>-->
   <!--   </div>--> <!--/video modal-->
      <!--</div>-->
      <?php
      // } else {
      //  print '<div class="col-sm-5 hidden-xs">';
      //  if($second_content_img)
      //   print "$second_content_img";
      //  print '</div>';
      // }
      //?>
      
      <!--<div class="col-xs-12 col-sm-7">-->
       <?php
       //if($secondary_content)
       // print " $secondary_content";
       ?> 
          <!--<div class="link-btn green-btn text-a-r">-->
           <?php
           //print "<a href = '$second_content_cta_link'>";
           // if($second_content_cta_link_text)
           // print "$second_content_cta_link_text";
           // print "</a>";
          //?>
          <!--</div>
      </div>
     </div>
    </div>
   </div>
  </div>-->  <!-- /secondary content -->
  
  <!---- feature content bottom ---->
 <div class="feature-content-bottom text-a-c" id="feature-content-bottom">
  <div class="container">
   <div class="feature-cb-inner border-radius">
    <?php
     print "<div class= 'feature-cb-top'>";
     if($content_feature_cb)
     print "$content_feature_cb";
     
     if($cta_text_feature_cb){
     print "<div class='link-btn'>";
     print "<a href='$cta_link_feature_cb'>";
     print $cta_text_feature_cb;
     print "</a>";
     print "</div>";
     }
     print "</div>";
     
     print "<div class= 'feature-cb-images ul-no-style img-hover'>";
     if($images_feature_cb)
     print "$images_feature_cb";
     print "</div>";
    ?>
   </div>
  </div>
 </div> <!---- /feature content bottom ---->
  
  <div class="feature-content">
   <div class="container">
    <div class="feature-heading">
      <?php
        if($feature_heading)
        print "$feature_heading";
      ?>
    </div>
    <div class="feature-inner text-a-c">
      <div class="row">
         <div class="col-xs-12 col-sm-3">
          <div class = "inner-content-one inner-content">
          <?php
              if($heading_feature_one)
              print "<h3>";
              print "$heading_feature_one";
              print "</h3>";
              
              if($strapline_feature_one)
              print "<p class='hidden-xs'>";
              print "$strapline_feature_one";
              print "</p>";
              
              print "<div class='link-btn blue-btn'>";
              print "<a href = '$cta_link_feature_one'>";
                if($cta_link_txt_feature_one)
                print "$cta_link_txt_feature_one";
                print "</a>";
              print "</div>";
          ?>
          </div>
          </div>
           
         <div class="col-xs-12 col-sm-3">
          <div class = "inner-content-two inner-content">
          <?php
              if($heading_feature_two)
              print "<h3 class='green-text'>";
              print "$heading_feature_two";
              print "</h3>";
              
              if($strapline_feature_two)
              print "<p class='hidden-xs'>";
              print "$strapline_feature_two";
              print "</p>";
              
              print "<div class='link-btn green-btn'>";
                print "<a href = '$cta_link_feature_two'>";
                  if($cta_link_txt_feature_two)
               print "$cta_link_txt_feature_two";
               print "</a>";
               print "</div>";
          ?>
          </div>
          </div>
           
        <div class="col-xs-12 col-sm-3">
         <div class = "inner-content-three inner-content">
          <?php
              if($heading_feature_three)
              print "<h3 class='text-yellow'>";
              print "$heading_feature_three";
              print "</h3>";
              
              if($strapline_feature_three)
              print "<p class='hidden-xs'>";
              print "$strapline_feature_three";
              print "</p>";
              
              print "<div class='link-btn yellow-btn'>";
              print "<a href = '$cta_link_feature_three'>";
                if($cta_link_txt_feature_three)
              print "$cta_link_txt_feature_three";
              print "</a>";
             print "</div>";
          ?>
         </div>
          </div>
           
         <div class="col-xs-12 col-sm-3">
          <div class = "inner-content-four inner-content">
          <?php
              if($heading_feature_four)
              print "<h3 class='text-red'>";
              print "$heading_feature_four";
              print "</h3>";
              
              if($strapline_feature_four)
              print "<p class='hidden-xs'>";
              print "$strapline_feature_four";
              print "</p>";
              
              print "<div class='link-btn red-btn'>";
               print "<a href = '$cta_link_feature_four'>";
                 if($cta_link_txt_feature_four)
                print "$cta_link_txt_feature_four";
               print "</a>";
             print "</div>";
          ?>
          </div>
          </div>
         </div>
      </div>
    </div>
   </div>
  
    
    <!--call to action banner-->
    <div class="cta-banner text-a-c">
     <div class="container">
      <div class="cta-banner-inner">
       <?php
         print "<div class= 'cta-banner-top'>";
         if($cta_banner_heading)
          print "<h2>";
          print "$cta_banner_heading";
          print "</h2>";
          
          if($cta_banner_strapline)
            print "<span>";
            print "$cta_banner_strapline";
            print "</span>";
          print "</div>";
       ?>
     <div class="cta-banner-btn">
      <div class="row">
       <div class="col-xs-12 col-sm-4">
         <?php
           print "<div class='link-btn green-btn cta-btn'>";
           print '<a href="tel:' . $company_phone . '">';
           print "call $company_phone";
           print "</a>";
           print "</div>";
         ?>
       </div>
          <div class="col-xs-12 col-sm-4">
            <?php
              print "<div class='link-btn green-btn cta-btn'>";
              print '<a href="mailto:' . $site_mail  . '">';
              print "email us";
              print "</a>";
              print "</div>";
            ?>
       </div>
        <div class="col-xs-12 col-sm-4">
             <?php
               print "<div class='link-btn green-btn cta-btn last'>";
               print "<a href='$cta_banner_link'>";
               if($cta_banner_link_txt)
               print "$cta_banner_link_txt";
               print "</a>";
               print "</div>";
             ?>
       </div>
      </div>
     </div>
     </div>
     </div>
    </div>
    
    <!--front news area-->
    <div class="front-news-region">
     <?php if($front_news_region){
  print '<div class="container"><div class="front-news-area"><div class="row">';
        print $front_news_region;
        
        print '<div class="col-xs-12 col-sm-4">';
        if($twitter_box)
        print '<div class= "front-news-block box-shadow equal-height">';
        print $twitter_box;
        print '</div></div>';
     print '</div></div></div>';
  } ?>
    </div>
 
 
 
 <!----- footer logo region ------->
 <div class="footer-logo-region">
  <?php
    if($footer_logo)
    print "<div class='container'><div class='footer-logo-inner'>";
    print "$footer_logo";
    print "</div></div>";
  ?>
 </div>
 
  <div class="footer-wrapper">
      <div class="footer"><div class="container"><div class="footer-area"><div class="row">
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
        </div> <!--/footer-area-->
        </div><!-- /row -->
      </div><!-- /container -->
      </div> <!-- /footer -->
    </div> <!-- /footer-wrapper -->
    
 <?php if (!empty($left)): ?>
        <div id="sidebar-left" class="column sidebar">
          <?php print $left; ?>
        </div> <!-- /sidebar-left -->
      <?php endif; ?>
      
      <?php if (!empty($right)): ?>
        <div id="sidebar-right" class="column sidebar">
          <?php print $right; ?>
        </div> <!-- /sidebar-right -->
      <?php endif; ?>

    </div> <!-- /container -->

  
      

    <?php print $closure; ?>
    
    <!-- Modal Search -->
  <div class="modal fade" id="modalsearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title">Search</h2>
        </div>
        <div class="modal-body">
          <?php print $search_box; ?>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

 
  
  <script>	
      $(".video-modal").on('hidden.bs.modal', function (e) {
       $(".video-modal iframe").attr("src", $(".video-modal iframe").attr("src"));
      });
  </script>
  
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58450924ed9597d7"></script>

</body>
</html>

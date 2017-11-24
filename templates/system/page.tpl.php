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
  $specific_blocks = $node->field_specific_blocks[0]['value'];
  $specific_blocks2 = $node->field_specific_blocks[1]['value'];
  $video = $node->field_video[0]['value'];
  
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

  <div class="top-header no-bullets hidden-xs">
    <div class="container">
     <div class="pull-left email">
         <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php print $site_mail; ?>"  class="phone"><?php print $site_mail; ?></a>
     </div>
     <div class="pull-left phone">
         <a href="tel:<?php print $company_phone; ?>"  class="phone"><?php print $company_phone; ?></a>
     </div>
     <div class="pull-left cloud">
         <i class="fa fa-cloud" aria-hidden="true"></i><a href="#" class="phone">Login to cloud</a>
     </div>
      <?php if (!empty($top_header)): ?>
          <?php print $top_header; ?>
      <?php endif; ?>
        <div class="search">
            <a href="#modalsearch"  class="search">Search</a><i class="fa fa-search" aria-hidden="true"></i>
     </div>
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
           </div>
         <?php endif; ?>
       </div>
     </div>
    </div> <!--/main navigation-->
    
    <div class="inner-banner position-r">
     <?php
     if($inner_banner)
     print "$inner_banner";
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
    <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
     <div id="container" class="clear-block">
       <div id="main" class="column"><div id="main-squeeze">
         <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
         <div id="content" class="main-content">
           <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
           <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
           <?php if (!empty($messages)): print $messages; endif; ?>
           <?php if (!empty($help)): print $help; endif; ?>
           <div id="content-content" class="clear-block">
             <?php print $content; ?>
               <?php if($video){?>
               <div class="video-panel">
                   <?php print $video?>
               </div>
               <?php } ?>
           </div> <!-- /content-content -->
           <?php print $feed_icons; ?>
         </div> <!-- /content -->
       </div>
       
        <div class="content-bottom">
         <div class="row">
        <?php
          if($content_bottom)
          print "$content_bottom";
        ?>
       </div>
         </div>
        
        <!--Check box selection code starts-->
             <?php
      if($specific_blocks == "block_one" && $specific_blocks2 == "block_two"){
       
         print "<div class='cta-banner inner-accreditations-banner link-btn border-radius text-a-c'>";
         $block = module_invoke('nodeblock', 'block', 'view', "24069");
         print $block['content'];
         print "</div>";
         
         print "<div class='feature-content-bottom inner-cta-banner text-a-c'><div class='feature-cb-inner border-radius'>";
         print views_embed_view('inner_bottom_cta_banner','block_1');
         print "</div></div>";
         
      }else if($specific_blocks == "block_one"){
        print "<div class='cta-banner inner-accreditations-banner link-btn border-radius text-a-c'>";
         $block = module_invoke('nodeblock', 'block', 'view', "24069");
         print $block['content'];
         print "</div>";
         
      }else if($specific_blocks == "block_two"){
        print "<div class='feature-content-bottom inner-cta-banner text-a-c'><div class='feature-cb-inner border-radius'>";
         print views_embed_view('inner_bottom_cta_banner','block_1');
        print "</div></div>";
      }
  
     ?>
       <!--Check box selection code ends here-->
      </div><!-- /main-squeeze /main -->
      
       <?php if (!empty($left)): ?>
         <div id="sidebar-left" class="column sidebar">
           <?php print $left; ?>
           
           <?php if ($node->field_our_experts[0][nid] != NULL): ?>
             <div id="left-staff-experts" class="our_experts left-side left-our-expert box-shadow">
               <h2 class="text-a-c">Our Experts</h2>
               <?php if ($node->field_our_experts[0][nid]): ?>
                 <div class="staff-expert-list">
                   <?php print views_embed_view('our_experts','block_1',$node->field_our_experts[0][nid]); ?>
                 </div>
               <?php endif; ?>
               <?php if ($node->field_our_experts[1][nid]): ?>
                 <div class="staff-expert-list">
                   <?php print views_embed_view('our_experts','block_1',$node->field_our_experts[1][nid]); ?>
                 </div>
               <?php endif; ?>
               <?php if ($node->field_our_experts[2][nid]): ?>
                 <div class="staff-expert-list">
                   <?php print views_embed_view('our_experts','block_1',$node->field_our_experts[2][nid]); ?>
                 </div>
               <?php endif; ?>
               <?php if ($node->field_our_experts[3][nid]): ?>
                 <div class="staff-expert-list">
                   <?php print views_embed_view('our_experts','block_1',$node->field_our_experts[3][nid]); ?>
                 </div>
               <?php endif; ?>
             </div>
           <?php endif; ?>
           
         </div> <!-- /sidebar-left -->
       <?php endif; ?>
  </div>
   </div><!-- /page -->
    
       <?php if (!empty($right)): ?>
         <div id="sidebar-right" class="column sidebar">
           <?php print $right; ?>
         </div> <!-- /sidebar-right -->
       <?php endif; ?>
       
      
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
   
   <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58450924ed9597d7"></script> 
 
 </body>
 </html>

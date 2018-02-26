<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php wp_head(); ?> 

  <!-- Mobile Specific Metas 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/active_collective_logo2.png">

  <!-- FONT 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=2.1">  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nav.css"> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/royal-slider-customized.css">  
  <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6736472/7469972/css/fonts.css" />
  <link href="//cloud.typenetwork.com/projects/1156/fontface.css/" rel="stylesheet" type="text/css">

  <!--[if IE]>
  <style> 
    @media screen and (min-width: 1920px){
      nav#menu ul li a {padding:16px 16px 15px 16px;}
    } 
  </style>
  <![endif]-->  


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
  
  <!-- JS
  -------------------------------------------------- -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


<?php if(is_page(array('terms-of-use','privacy-policy','terms','privacy'))){ ?>
    <script>
      $.ajaxSetup({
          scriptCharset: "utf-8", //maybe "ISO-8859-1"
          contentType: "application/json; charset=utf-8"
      });
      $.ajax({
        type: 'GET',
        url: 'https://www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=privacy-policy',
        data: { get_param: 'value' },
        dataType: 'json',
        success: function (data) {
          $.each(data, function(index, element) {
            var txt = element.content.rendered;
            $("#privacy").html(txt);
          });
        }
      });
      $.ajax({
        type: 'GET',
        url: 'https://www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=terms-of-use',
        data: { get_param: 'value' },
        dataType: 'json',
        success: function (data) {
          $.each(data, function(index, element) {
            var txt = element.content.rendered;
            $("#terms").html(txt);
          });
        }
      });
    </script>
<?php } ?>

<!-- DFP Tags  -->
<!--  -->
    
<?php get_template_part('inc/ad-scripts'); ?> 

<!-- End DFP Tags -->   

<!-- Google Tag Manager -->
<!-- Place In Header -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WXPBTHP');</script>
<!-- End Google Tag Manager -->

</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<! -- Place in Body -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXPBTHP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if(is_front_page()){ ?>
<div id="activewear_prestitial"
style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('activewear_prestitial'); });
</script>
</div>

<?php } else { ?>
<div id="activewear_interstitial"
style="float:left;">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('activewear_interstitial'); });
</script>
</div>

<?php } ?>

<!--START nav#network   -->
<!--   -->
    <nav id="network">
        <div class="container">
            <div class="show-locations">
              <span class="left">California</span>
              <a href="http://newyork.activewearcollective.com" class="right">New York</a>
            </div>       
            <div class="social">
                <a target="blank" href="<?= do_shortcode('[pods name="sitesettings" field="facebook_url"]')?>
                    "> <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                &nbsp;
                <a target="blank" href="<?= do_shortcode('[pods name="sitesettings" field="twitter_url"]')?>
                    "> <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                &nbsp;
                <a target="blank" href="<?= do_shortcode('[pods name="sitesettings" field="instagram_url"]')?>
                    ">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </nav>
<!--END nav#network--> 

<header class="cf">
  <div class="container cf">
    <div class="ir">
      <a href="<?php bloginfo('siteurl') ?>" id="brand" class="col-lg-4">
          <!--img src="<?= do_shortcode('[pods name="site_settings" field="brand_logo"]'); ?>"-->
          <!-- img src="<?php bloginfo('siteurl') ?>/wp-content/uploads/2017/07/active-logo-2018-h.png" / -->    
      </a>
    </div>
  </div>
</header>

    <div class="nav-container cf">
        <nav class="container" id="menu">
            <div class="fluid-width">
            <div class="inner-block">
                <?php wp_nav_menu(
                  array(
                    'menu'    => 'Primary Menu',
                    'container' => false,
                    'menu_class' => 'twelve columns',
                    'menu_id' => '',
                    )
                ); ?>

            </div>
        </div>
         <h4><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></h4>  
        <div id="search">       
            <form action="<?php bloginfo('siteurl'); ?>">
            <input name="s" type="text" class="in-search" value="Search" onBlur="if(this.value == '') this.value = 'Search'" onFocus="if(this.value == 'Search') this.value = ''" />
            <input type="submit" id="searchsubmit">
            </form>
        </div>        
    </nav>
    </div> <!-- end nav-container    -->
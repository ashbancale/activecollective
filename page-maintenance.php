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
 <style>
 .maintenance {
 	font-family: "Times New Roman", serif;
 	color: black;
 	text-align:center;
	margin: 80px 10px;
	font-size:18px;
 }
 .maintenance h1 {
 	font-family: "Times New Roman", serif;
 	font-size:30px;
 	font-weight: normal;
 	margin-bottom:0px;
 }
 .maintenance img {
 	max-width:100%;
 }
 .maintenance a{
 	color: #7bbe5d;
 	text-decoration:none;
 }
 .maintenance a:hover {
 	color: #7bbe5d;
 	text-decoration:underline;
 }
 .maintenance p{margin-top:0px;}

 @media screen and (min-width: 768px){
 .maintenance {
  margin-top: 370px;
 }
 }

 @media screen and (min-width: 1280){
  .maintenance {
    margin-top: 500px;
  }
 }
 </style>



</head>
<body class="maintenance">
    <a href="<?php bloginfo('siteurl') ?>" id="brand" class="col-lg-4">
        <!--img src="<?= do_shortcode('[pods name="site_settings" field="brand_logo"]'); ?>"-->
        <img src="http://localhost/activecollective/wp-content/uploads/2017/03/activecollection-logo-2017.png" />    
    </a>
    <h1>Temporarily Down for Maintenance</h1>
    <p>We are performing scheduled maintenance. We should be back online shortly.</p>
    <p>We're sorry for the inconvenience.<br />
    As an alternative, you may visit: <br />
    <a href="#">Swim Collective</a></p>
<body>
</body>
</html>
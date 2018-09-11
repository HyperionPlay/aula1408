<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap/css/bootstrap.min.css" type="text/css"/>
  <?php wp_head();?>
  
  <div class="container geral">
      <div class="row">
          <div class="col-md-3 logo">
              <a href="<?php echo site_url();?>">
                  <img scr="<?php echo get_template_directory_uri()?>/assets/images/logo.png" class="logo">
              </a>
          </div>
          <div class="col-md-9 titulo">
              <h1><?php bloginfo('name')?></h1>
              <p><?php bloginfo('description')?></p>
          </div>
      </div>
  </div>
  
</head>
<body>
</body>
</html>
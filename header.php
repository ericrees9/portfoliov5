<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
<?php $subhead = get_field('subhead') ?>
<body <?php body_class(); ?>>
  <div class="container">
    <div class="d-flex justify-content-center">
      <div class="name-headline">
        <h1>Eric Rees</h1>
          <?php if($subhead): { ?>
            <div class="cat-subhead">
              <h1><?php echo $subhead ?></h1>
            </div>
          <?php } else: endif ?>
      </div>
    </div>
  </div>  

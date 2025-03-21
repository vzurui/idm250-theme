<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo wp_get_document_title(); ?></title>

<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
<a href="<?php echo home_url(); ?>" class="logo">Vy Le</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
        <li><a href="<?php echo site_url('/projects/'); ?>">Work</a></li>
        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
        <li><a href="<?php echo site_url('/resume'); ?>">Resume</a></li>
    </ul>
  </header>
</body>
</html>
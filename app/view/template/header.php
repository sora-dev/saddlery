<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />

  <?php $this->helpers->seo($view); ?>
  <link rel="icon" href="public/images/favicon.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Serif+Display&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
  <?php $this->helpers->analytics(); ?>
  <?php if ($view == "home"): ?>
  <link rel="canonical" href="<?php echo URL; ?>" />
  <?php endif; ?>
  <script src="https://kit.fontawesome.com/d12a3a0bcb.js" crossorigin="anonymous"></script>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
  <?php $this->checkSuspensionHeader(); ?>
  <header>
    <div class="header-contact">
      <div class="row">
        <div class="main-logo">
          <a href="home"><img src="public/images/common/logo.png" alt="Main Logo"></a>
        </div>
        <div class="contacts">
          <div class="phone">
            <i class="fas fa-mobile-alt"></i>
            <div class="phone-no">
              <?php $this->info(["phone","tel"]);?>
              <?php $this->info(["phone2","tel"]);?>
            </div>

          </div>
          <div class="address">
            <i class="fas fa-map-marker-alt"></i>
            <p><?php $this->info("address");?></p>
          </div>
          <div class="socials">
            <p>Follow Us:</p>
            <a href="<?php $this->info("fb_link");?>">f</a>
          </div>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="row">

        <nav id="myHeader">
          <a href="#" id="pull"><strong>MENU</strong></a>
          <ul>
            <li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
            <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a>
            </li>
            <li <?php $this->helpers->isActiveMenu("services"); ?>><a
                href="<?php echo URL ?>services#content">SERVICES</a></li>
            <li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a>
            </li>
            <li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a>
            </li>
            <li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT
                US</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div id="banner">
    <div class="row">
      <span>We our the best</span>
      <h1>Saddle Maker</h1>
      <h2>in Baguio City</h2>
      <a href="#contactus">Contact Us</a>
    </div>
  </div>
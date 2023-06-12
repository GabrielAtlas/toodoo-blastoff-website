<?php
$currentUrl = $_SERVER['REQUEST_URI'];

$blastoffStudents = [
  'PT' => '/blastoff-alunos/',
  'EN' => '/en/blastoff-students/',
  'ES' => '/es/blastoff-estudiantes/'
];

$blastoffCompanies = [
  'PT' => '/blastoff-empresas/',
  'EN' => '/en/blastoff-companies/',
  'ES' => '/es/es-blastoff-empresas/'
];

if (in_array($currentUrl, $blastoffStudents) || in_array($currentUrl, $blastoffCompanies)) {
  $urlObj = new stdClass();

  if (in_array($currentUrl, $blastoffStudents)) {
    $urlObj->EN = $blastoffStudents['EN'];
    $urlObj->PT = $blastoffStudents['PT'];
    $urlObj->ES = $blastoffStudents['ES'];
  } else {
    $urlObj->EN = $blastoffCompanies['EN'];
    $urlObj->PT = $blastoffCompanies['PT'];
    $urlObj->ES = $blastoffCompanies['ES'];
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/style.css?ref=22" rel="stylesheet" type="text/css" />
  <link rel="icon" href="https://73p545.a2cdn1.secureserver.net/wp-content/uploads/2021/11/cropped-favicon-todoo-32x32.png" sizes="32x32" />
  <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/js/blastoff.js?ref=20"></script>
  <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/js/responsive.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php do_action('wpseo_head'); ?>

</head>

<body>
  <header class="header">
    <section class="header-desktop fixed-top d-none d-xl-block">
      <section class="bg-magenta container-fluid">
        <div class="d-flex justify-content-between container">
          <div>
            <ul class="d-flex gap-2 align-items-center list-unstyled m-0 py-2">
              <li>
                <a href="https://www.facebook.com/toodoobr/">
                  <figure class="m-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/facebook.svg" alt="facebook">
                  </figure>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/toodoobr">
                  <figure class="m-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/instagram.svg" alt="instagram">
                  </figure>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="m-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/behance.svg" alt="behance">
                  </figure>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/toodoobr">
                  <figure class="m-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/linkedin.svg" alt="linkedin">
                  </figure>
                </a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center gap-2">
            <figure class="m-0">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/globe.svg" alt="globe">
            </figure>
            <select class="select-language cursor-pointer text-white" name="language" id="header-language">
              <?php foreach ($urlObj as $key => $value) { ?>
                <option class="text-black" value="<?php echo $value ?>" onclick="this.value !== '' && (window.location.href = this.value)"><?php echo $key ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </section>
      <section class="bg-white container-fluid">
        <div class="container py-4 d-flex align-items-center justify-content-between">
          <a href="#">
            <figure class="m-0">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/images/toodoo-pink-logo.svg" alt="">
            </figure>
          </a>
          <nav>
            <ul class="list-unstyled d-flex gap-5 m-0 fw-medium text-uppercase">
              <li>
                <a class="color-blue text-decoration-none" href="https://toodoo.com.br/en/about-us/">
                  About Us
                </a>
              </li>
              <li>
                <a class="color-blue text-decoration-none" href="#">
                  Our Services
                </a>
              </li>
              <li>
                <a class="color-blue text-decoration-none" href="https://toodoo.com.br/en/cases-en/">
                  Cases
                </a>
              </li>
              <li>
                <a class="color-blue text-decoration-none" href="/blastoff">
                  Blastoff
                </a>
              </li>
              <li>
                <a class="color-blue text-decoration-none" href="https://toodoo.com.br/news/">
                  News
                </a>
              </li>
              <li>
                <a class="color-blue text-decoration-none" href="https://toodoo.com.br/en/home-en/">
                  Contact Us
                </a>
              </li>
            </ul>
          </nav>
          <figure class="m-0 opacity-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/images/toodoo-pink-logo.svg" alt="">
          </figure>
        </div>
      </section>
    </section>
    <section class="header-mobile fixed-top d-xl-none bg-white">
      <div class="header-mobile-bar d-flex justify-content-between align-items-center p-4">
        <figure class="image-logo m-0">
          <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/images/toodoo-pink-logo.svg" alt="Toodoo">
        </figure>
        <figure class="menu-image mobile-menu-button close m-0 cursor-pointer">
          <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/header-mobile-menu-close.svg" alt="menu">
        </figure>
        <figure class="menu-image mobile-menu-button m-0 cursor-pointer">
          <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/header-mobile-menu.svg" alt="menu">
        </figure>
      </div>
      <nav class="header-mobile-menu">
        <div class="search-bar-container">
          <div class="search-bar">
            <figure class="m-0">
              <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/search-magenta.svg" alt="pesquisa">
            </figure>
            <input type="text" placeholder="Buscar na toodoo">
          </div>
        </div>
        <ul class="header-mobile-list list-unstyled">
          <li class="mobile-menu-item">
            <a href="https://toodoo.com.br/en/about-us/">About Us</a>
          </li>
          <li class="mobile-menu-item">
            <a href="https://toodoo.com.br/en/our-work/">Our Services</a>
          </li>
          <li class="mobile-menu-item">
            <a href="https://toodoo.com.br/cases/">Cases</a>
          </li>
          <li class="mobile-menu-item">
            <div class="accordion accordion-flush" id="navigation-menu-option-blastoff">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navigation-option-blastoff" aria-expanded="false" aria-controls="navigation-option-blastoff">
                    Blastoff
                  </button>
                </h2>
                <div id="navigation-option-blastoff" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#navigation-menu-option-blastoff">
                  <div class="accordion-body">
                    <ul class="list-unstyled">
                      <li><a href="https://toodoo.com.br/en/blastoff-students/">For students</a></li>
                      <li><a href="https://toodoo.com.br/blastoff-empresas/">For companies</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="mobile-menu-item">
            <a href="https://toodoo.com.br/news/">News</a>
          </li>
          <li class="mobile-menu-item">
            <a href="https://toodoo.com.br/en/contact-us/">Contact Us</a>
          </li>
        </ul>
        <ul class="social-media-list list-unstyled">
          <li class="social-media-item">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/facebook-magenta.svg" alt="facebook">
            </figure>
          </li>
          <li class="social-media-item">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/instagram-magenta.svg" alt="instagram">
            </figure>
          </li>
          <li class="social-media-item">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/linkedin-magenta.svg" alt="linkedin">
            </figure>
          </li>
          <li class="social-media-item">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/twitter-magenta.svg" alt="twitter">
            </figure>
          </li>
          <li class="social-media-item">
            <figure>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/youtube-magenta.svg" alt="youtube">
            </figure>
          </li>
        </ul>
        <p class="color-magenta">Nos acompanhe</p>
        <div class="d-flex align-items-center justify-content-center gap-2 mx-auto">
          <figure class="m-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/icons/globe-black.svg" alt="globe">
          </figure>
          <select class="select-language cursor-pointer text-white" name="language" id="header-language">
            <?php foreach ($urlObj as $key => $value) { ?>
              <option class="text-black" value="<?php echo $value ?>" onclick="this.value !== '' && (window.location.href = this.value)"><?php echo $key ?></option>
            <?php } ?>
          </select>
        </div>
      </nav>
    </section>
  </header>
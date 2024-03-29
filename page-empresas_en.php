<?php
// Template name: Blastoff-Empresas-EN
$current_language = (pll_current_language() == 'pt') ? false : pll_current_language();
?>
<?php if ($current_language) : get_header('blastoff-' . $current_language);else : get_header('blastoff'); endif; ?>
<main>
  <section id="branding-section" class="branding position-relative py-5">
    <div class="container d-flex justify-content-between pt-5">
      <div class="brading-info">
        <h1>
          <?php echo the_field('branding_heading'); ?>
        </h1>
        <p>
          <?php echo the_field('branding_description') ?>
        </p>
        <a href="#form-section" class="toodoo-button ghost mb-5"><?php echo the_field('saiba_mais_button_label'); ?></a>
        <div class="i-cant-hear-you"></div>
        <div class="people-gif"></div>
      </div>
      <div class="position-relative">
        <div class="sorry-go-ahead d-none d-md-block"></div>
        <img class="rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/gifs/empresas-1.gif" style="mix-blend-mode: soft-light" width="579" height="326" />
      </div>
    </div>
  </section>

  <section id="our-job">
    <div class="container py-5">
      <div class="our-job-heading text-center mb-5">
        <h3 class="color-magenta"><?php echo the_field('step_card_pre_title'); ?></h3>
        <h1 class="color-blue"><?php echo the_field('step_card_section_title'); ?></h1>
      </div>
      <div class="our-job-content mt-4">
        <div class="row">
          <div class="col-md-6 order-1 order-md-2">
            <div class="d-flex flex-column">
              <?php
              // Get the repeater field values
              $stepCards = get_field('step_cards');

              // Check if there are values
              if ($stepCards) {
                foreach ($stepCards as $index => $card) {
                  $title = $card['step_card_title'];
                  $description = $card['step_card_description'];
                  $icon = $card['step_card_icon'];

                  // Determine if it's the first iteration
                  $class = ($index === 0) ? 'active' : '';

                  // Display the values
                  echo '<div id="step-' . $index . '" class="step-card ' . $class . '">
                                <img src="' . $icon . '" />
                                <div class="step-card-description">
                                  <h6>' . $title . '</h6>
                                  <p>
                                  ' . $description . '
                                  </p>
                                </div>
                              </div>';
                }
              }
              ?>
            </div>
          </div>
          <div id="step-images" class="col-md-6 order-md-4 mb-4">
            <?php
            // Check if there are values
            if ($stepCards) {
              foreach ($stepCards as $index => $card) {
                $image = $card['step_card_image'];

                // Determine if it's the first iteration
                $visible = ($index === 0) ? '' : 'd-none';

                // Display the values
                echo '<img id="step-image-' . $index . '" class="img-fluid ' . $visible . '" src="' . $image . '" width="550" height="651" alt="Foto de pessoas felizes" />';
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="rocket-section" class="bg-blue">
    <div class="rocket-section container p-5">
      <img src="<?php echo the_field('rocket_icon'); ?>" class="my-4" alt="Rocket icon" />
      <p>
        <?php echo the_field('rocket_description'); ?>
      </p>
      <div class="my-4">
        <a href="<?php echo the_field('rocket_button_link'); ?>" class="toodoo-button">
          <?php echo the_field('rocket_button_text'); ?>
        </a>
      </div>
    </div>
  </section>

  <section id="methodology-section">
    <div class="container py-5">
      <div class="methodology-heading d-flex flex-column align-items-center justify-content-center text-center mb-5">
        <h3 class="color-magenta"><?php echo the_field('methodology_pre_title'); ?></h3>
        <h1 class="color-blue"><?php echo the_field('methodology_title'); ?></h1>
        <p>
          <?php echo the_field('methodology_description'); ?>
        </p>
        <div class="d-flex flex-nowrap overflow-auto text-nowrap mw-100 gap-3 mt-5" id="methodology-buttons">

          <?php
          $methodologies = get_field('methodologies');

          if ($methodologies) {
            foreach ($methodologies as $index => $methodology) {
              $title = $methodology['methodology_title'];

              $active = ($index === 0) ? '' : 'ghost';

              echo '<button id="methodology-button-' . $index . '" class="toodoo-button ' . $active . '">' . $title . '</button>';
            }
          }
          ?>
        </div>
      </div>
      <div class="methodology-content mt-5">
        <div class="row">
          <div id="methodologies" class="col-md-6">
            <?php
            if ($methodologies) {
              foreach ($methodologies as $index => $methodology) {
                $description = $methodology['methodology_description'];

                $visible = ($index === 0) ? '' : 'd-none';

                echo '<div id="methodology-' . $index . '" class="d-flex align-items-start gap-3 ' . $visible . '">
                                <img class="img-fluid" src="' . get_stylesheet_directory_uri() . '/new-blastoff/public/assets/images/toodoo-default-logo.svg" alt="Toodoo Logo" />
                                <p>' . $description . '</p>
                              </div>';
              }
            }
            ?>
          </div>
          <div id="methodologies-images" class="col-md-6">
            <?php
            if ($methodologies) {
              foreach ($methodologies as $index => $methodology) {
                $image = $methodology['methodology_image'];

                $visible = ($index === 0) ? '' : 'd-none';

                echo '<img id="methodology-image-' . $index . '" class="methodology-image rounded img-fluid ' . $visible . '" width="568" height="368" src="' . $image . '" alt="Imagem ilustrativa" />';
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="feedback-section">
    <div class="container py-5">
      <div class="feedback-heading d-flex flex-column align-items-center justify-content-center text-center mb-5">
        <h3 class="color-magenta"><?php echo the_field('depoimentos_title'); ?></h3>
        <h1 class="color-blue">
          <?php echo the_field('depoimentos_descricao'); ?>
        </h1>
      </div>
      <div class="feedback-content mt-4">
        <?php echo do_shortcode('[slide-anything id="4839"]'); ?>
      </div>
    </div>
  </section>

  <section id="form-section">
    <div class="form-section-container container py-5">
      <div class="row py-5">
        <div class="form-section-texts col-md-6 mb-5">
          <h1>
            <?php echo the_field('contact_form_title'); ?>
          </h1>
          <p><?php echo the_field('contact_form_subtitle'); ?></p>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="toodoo-form">
            <?php echo do_shortcode('[contact-form-7 id="4821" title="EN - Form Contato Blastoff Empresas"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="solution-section">
    <div class="solution-section-container container pt-5">
      <div class="row pt-3">
        <div class="solution-section-texts col-md-6 mb-5">
          <h1>
            <?php echo the_field('vamos_conversar_titulo'); ?>
          </h1>
          <a href="<?php echo the_field('vamos_conversar_link_botao_redirect'); ?>" class="toodoo-button mt-4 mb-5"><?php echo the_field('vamos_conversar_titulo_botao'); ?></a>
        </div>
        <div class="col-md-7 text-end d-none d-md-block">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/assets/images/toodoo-avatar.svg?r=333" alt="Mascote Toodoo" />
        </div>
      </div>
    </div>
  </section>
</main>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/new-blastoff/public/js/empresas.js"></script>
<?php get_footer('blastoff'); ?>